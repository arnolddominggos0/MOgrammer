<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forum</title>

  <!---Favicons-->
  <!---===============================================-->
  <link rel="icon" type="image/png" sizes="" href="{{ asset('assets/img/gallery/logoMogrammer1.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
  <meta name="theme-color" content="#ffffff">

  <!--Stylesheets-->
  <!--===============================================-->
  <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
</head>

<body>

  <main class="main" id="top">
    @include('frontend.include.begin')
    
    @include('frontend.include.header')
    <div id="ReplyModal" class="modal fade" role="dialog" tabindex="-1">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            <h4 class="modal-title">Reply Question</h4>
          </div>
          <div class="modal-body">
            <form name="frm1" method="post">
              <input type="hidden" id="commentid" name="Rcommentid">
              <div class="form-group">
                <label for="usr">Write your name:</label>
                <input type="text" class="form-control" name="Rname" required>
              </div>
              <div class="form-group my-3">
                <label for="comment">Write your reply:</label>
                <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
              </div>
              <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
            </form>
          </div>
        </div>

      </div>
    </div>

    <div class="container">

      <div class="panel panel-default" style="margin-top:50px">
        <div class="panel-body">
          <h3>Community forum</h3>
          <hr>
          <form name="frm" method="post">
            <input type="hidden" id="commentid" name="Pcommentid" value="0">
            <div class="form-group">
              <label for="usr">Write your name:</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group my-3">
              <label for="comment">Write your question:</label>
              <textarea class="form-control" rows="5" name="msg" required></textarea>
            </div>
            <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
          </form>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Recent questions</h4>
          <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
            <tbody id="record">

            </tbody>
          </table>
        </div>
      </div>

    </div>



    @include('frontend.include.footer')
  </main>
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
  <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{ asset('vendors/is/is.min.js')}}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
  <script src="{{ asset('assets/js/theme.js')}}"></script>

  <script>
    var myVar = setInterval(LoadData, 2000);

    http_request = new XMLHttpRequest();

    function LoadData() {
      $.ajax({
        url: '{{route("viewComment")}}',
        type: "POST",
        dataType: 'json',
        success: function(data) {
          $('#MyTable tbody').empty();
          for (var i = 0; i < data.length; i++) {
            var commentId = data[i].id;
            if (data[i].parent_comment == 0) {
              var row = $('<tr><td><b><img src=" ' + '{{ asset("assets/img/avatar.png")}}' + '" width="25px" height="30px" />' + data[i].name + ' :<i> ' + data[i].date + ':</i></b></br><p style="padding-left:80px">' + data[i].post + '</br><a data-bs-toggle="modal" data-bs-target="#ReplyModal" data-id="' + commentId + '" title="Add this item" class="open-ReplyModal" href="#ReplyModal">Reply</a>' + '</p></td></tr>');
              $('#record').append(row);
              for (var r = 0;
                (r < data.length); r++) {
                if (data[r].parent_comment == commentId) {
                  var comments = $('<tr><td style="padding-left:80px"><b><img src="{{ asset("assets/img/avatar.png")}}" width="25px" height="30px" />' + data[r].name + ' :<i> ' + data[r].date + ':</i></b></br><p style="padding-left:40px">' + data[r].post + '</p></td></tr>');
                  $('#record').append(comments);
                }
              }
            }
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error: ' + textStatus + ' - ' + errorThrown);
        }
      });
    }



    $(document).on("click", ".open-ReplyModal", function() {
      console.log('asddas');
      var commentid = $(this).data('id');
      $(".modal-body #commentid").val(commentid);
    });



    //Post data to the server
    $(document).ready(function() {
      $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var id = document.forms["frm"]["Pcommentid"].value;
        var name = document.forms["frm"]["name"].value;
        var msg = document.forms["frm"]["msg"].value;
        if (name != "" && msg != "") {
          $.ajax({
            url: "{{ route('saveComment') }}",
            type: "POST",
            data: {
              id: id,
              name: name,
              msg: msg,
            },
            cache: false,
            success: function(dataResult) {
              console.log(dataResult);
              var dataResult = JSON.parse(dataResult);
              if (dataResult.statusCode == 200) {
                $("#butsave").removeAttr("disabled");
                document.forms["frm"]["Pcommentid"].value = "0";
                document.forms["frm"]["name"].value = "";
                document.forms["frm"]["msg"].value = "";
                LoadData();
              } else if (dataResult.statusCode == 201) {
                alert("Error occured !");
              }

            }
          });
        } else {
          alert('Please fill all the field !');
        }
      });

      $('#btnreply').on('click', function() {
        $("#btnreply").attr("disabled", "disabled");
        var id = document.forms["frm1"]["Rcommentid"].value;
        var name = document.forms["frm1"]["Rname"].value;
        var msg = document.forms["frm1"]["Rmsg"].value;
        if (name != "" && msg != "") {
          $.ajax({
            url: "{{ route('saveComment') }}",
            type: "POST",
            data: {
              id: id,
              name: name,
              msg: msg,
            },
            cache: false,
            success: function(dataResult) {
              var dataResult = JSON.parse(dataResult);
              if (dataResult.statusCode == 200) {
                $("#btnreply").removeAttr("disabled");
                document.forms["frm1"]["Rcommentid"].value = "";
                document.forms["frm1"]["Rname"].value = "";
                document.forms["frm1"]["Rmsg"].value = "";
                LoadData();
                $("#ReplyModal").modal("hide");
              } else if (dataResult.statusCode == 201) {
                alert("Error occured !");
              }

            }
          });
        } else {
          alert('Please fill all the field !');
        }
      });
    });

    //Reply comment
    $(document).ready(function() {

    });
  </script>

  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>