@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar Pengguna</h1>
@stop

@section('content')
            <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
            <div class="col-md-4 mb-4">
                <a href="{{ route('userRegistration') }}" class="button" role="button">Registrasi Pengguna</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
        <table class="w-full table table-striped table-hover" id="datatable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>is_admin</th>
                    <th>Opsi</th>
                </tr>
            </thead>
        </table>AD
        </div>
        </div>
        </div>
        </div>
        </div>
        
</body>

</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <style>
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable({
                    ajax: '{{ url("getAllUsers")}}',
                    serverSide: false,
                    processing: true,
                    deferRender: true,
                    type: 'GET',
                    destroy: true,
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'is_admin',
                            name: 'is_admin'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            serchable: false
                        },
                    ]
                });
            });
        </script>
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ asset('vendors/is/is.min.js')}}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{ asset('assets/js/theme.js')}}"></script>
@stop