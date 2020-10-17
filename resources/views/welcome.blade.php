@extends('layouts.master')

@section('content')
    <div style="width:50%" class="container my-3">
    <form action="{{route('todo.store')}}" method="POST">
    @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="title" placeholder="Add a list" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
        </div>
       </form>
       <table class="table">
        <thead>
          <tr>
            <th>Todo</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as $item)
         <tr>
           <td>{{$item->title}}</td>
          <td>
          <form action="{{route('todo.destroy',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('todo.edit',$item->id)}}" class="btn btn-primary">Edit</a>
          </form>
          </td>
         </tr>
          @endforeach
         </tbody>
      </div>
    </div>
@endsection