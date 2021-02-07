@extends('layouts.master')

@section('content')
    <div style="width:50%" class="container my-3">
        <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Customer name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Address</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Gender</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
              </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom03">Mobile</label>
                  <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Add Customer</button>
                </div>
            </form>
       <table class="table">
        <thead>
          <tr>
            <th>Details</th>
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
