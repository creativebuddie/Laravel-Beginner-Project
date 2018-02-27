@extends('admin.layout.adminLayout')
@section('content')
<form  method="POST" action="{{ url('adminUsers/update', array($edit->id)) }}">
  <div class="form-group">
      <label for="name">Name</label>
    <input type="text" name="name" value="{{ $edit->name }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Email</label>
    <input type="email" name="email" value="{{ $edit->email }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="dob">DOB:</label>
    <input type="text" name="dob" value="{{ $edit->dob }}" class="form-control">
    {{ csrf_field() }}
  </div>
  <input type="submit" value="Submit" class="btn btn-default">
</form>
@endsection
