@extends('admin.layout.adminLayout')

@section('content')

<form  method="POST" action="{{ url('adminUsers/store') }}">
  <div class="form-group">
      <label for="name">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
      <label for="name">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="form-group">
      <label for="name">DOB</label>
    <input type="dob" name="dob" class="form-control">
    {{ csrf_field() }}
  </div>
  <input type="submit" value="Submit" class="btn btn-default">
</form>



@endsection
