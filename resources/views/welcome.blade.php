@extends('layouts.master')

@section('content')
    <div style="width:50%" class="container my-3">
        <form class="form-horizontal" action="{{route('customer.store')}}" method="post">
            {{csrf_field()}}
             <div class="form-group">
                 <label class="control-label col-sm-2">Name:</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name="name" placeholder="Enter Customer Name"> </div>
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-2">Address:</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name="address"  placeholder="Enter Customer Address"> </div>
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-2">Email:</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name="email"  placeholder="Enter Email"> </div>
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-2">Number</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name="mobile"  placeholder="Enter Phone Number"> </div>
             </div>
             <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                     <div class="checkbox">
                         <label>
                             <input type="checkbox" name="remember"> Remember me</label>
                     </div>
                 </div>
             </div>
             <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary">Add Customer</button>
                 </div>
             </div>
         </form>
       <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Mobile</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as $td)
         <tr>
           <td>{{$td->name}}</td>
           <td>{{$td->address}}</td>
           <td>{{$td->email}}</td>
           <td>{{$td->mobile}}</td>
          <td>
          <form action="{{route('customer.destroy',$td->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('customer.edit',$td->id)}}" class="btn btn-primary">Edit</a>
          </form>

          </td>
         </tr>
          @endforeach
         </tbody>
      </div>
    </div>
@endsection
