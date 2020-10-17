@extends('layouts.master')

@section('content')
@foreach ($datafor as $items)

<div style="width:50%" class="container my-3">
    <div class="input-group mb-3">
    <form action="{{route('todo.update',$items->id)}}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="PUT">
          <input value="{{$items->title}}" type="text" class="form-control" name="title" placeholder="Update the list" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
             <button class="btn btn-outline-secondary btn-success text-light mt-3" type="submit" id="button-addon2">Update</button>
          </div>
       </form>   
</div>
</div>

@endforeach   
@endsection