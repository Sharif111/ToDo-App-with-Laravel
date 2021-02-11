@extends('layouts.master')

@section('content')
<div class="container">
   @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
              {{$error}}
            </div>
        @endforeach
    @endif
    <form class="form-horizontal" action="{{route('customer.update',$td->id)}}"" method="post">
       {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $td->name}}" name="name" placeholder="Enter Customer Name"> </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $td->address}}" name="address"  placeholder="Enter Customer Address"> </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $td->email}}" name="email"  placeholder="Enter Email"> </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $td->mobile}}" name="mobile"  placeholder="Enter Phone Number"> </div>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
