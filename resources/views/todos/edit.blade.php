@extends('layouts.app')

@section('title')
Edit Todo/{{ $todos->id }} 
@endsection()

@section('content')
    <h1 class="text-center my-5">Edit Todo</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card card-default">
                <div class="card-header">
                    Todo : {{ $todos->name }}
                </div>
                <div class="card-body">
                  <form action="/todos/{{ $todos->id }}/update-todos" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value={{ $todos->name }}>
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" cols="10" rows="5" class="form-control">{{ $todos->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection