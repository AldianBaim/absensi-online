@extends('layouts.admin')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Management concession</h1>
<p class="mb-4">Disini fitur untuk menambahkan, menyunting, dan menghapus data izin pengguna.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {!! session('message') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="text-right">
            <a href="{{ url('concession/create') }}" class="btn btn-success m-2"><i class="fas fa-plus mr-1"></i> Add concession</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-light">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Reason</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($concessions as $concession)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $concession->user->name }}</td>
                        <td>{{ $concession->reason }}</td>
                        <td>{{ $concession->description }}</td>
                        <td>
                            <a href="{{ url('concession/' . $concession->id . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ url('concession/' . $concession->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah anda yakin akan dihapus?')" class="bg-danger text-white" style="border: 0px"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $concessions->links() }}
            </div>
        </div>
    </div>
</div>

@endsection