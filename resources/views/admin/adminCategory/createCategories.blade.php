@extends('admin.layout.adminLayout')

@section('content')

<form  method="POST" action="{{ url('adminCategory/store') }}">
  <div class="form-group">
      <label for="name">Cat Name</label>
    <input type="text" name="cname" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Cat Role</label>
    <input type="text" name="crole" class="form-control">
    {{ csrf_field() }}
  </div>
  <input type="submit" value="Submit" class="btn btn-default">
</form>



@endsection
