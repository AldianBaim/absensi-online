@extends('layouts.admin')

@section('content')

<!-- Page Heading -->
<a href="{{ url('attendance') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
<h1 class="h3 m-3 text-gray-800">Edit role</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ url('attendance') }}/{{ $attendance->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <div class="col-md-5 text-center">
                    <label for="">Name</label>
                    <select name="user_id" class="form-control">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $attendance->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="">Present at</label>
                    <input type="date" class="form-control" name="present_at" value="{{ $attendance->present_at }}">
                    @error('present_at')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-5 mt-3">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control">{{ $attendance->description }}</textarea>
                    @error('description')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection