@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Daftar Forum</h1>
@stop

@section('content')
<!-- ============================================-->
<!-- <section> begin ============================-->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- <a href="{{ route('forumTambah') }}" class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Tambah Komentar
                </a> -->
                <table class="w-full table table-striped table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>parent_comment</th>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Date</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($forums as $forum)
                        <tr>
                            <td>{{ $forum->id }}</td>
                            <td>{{ $forum->parent_comment }}</td>
                            <td>{{ $forum->name }}</td>
                            <td>{{ $forum->post }}</td>
                            <td>{{ $forum->date }}</td>
                            <td>
                            <form action="{{ route('forumDelete', $forum->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable({
            ajax: '{{ url("getAllForums")}}',
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
                    data: 'parent_comment',
                    name: 'parent_comment'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'post',
                    name: 'post'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    serchable: false
                }
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