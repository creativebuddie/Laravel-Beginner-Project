@extends('admin.layout.adminLayout')
@section('content')
<form  method="POST" action="{{ url('adminCategory/update', array($categories->id)) }}">
  <div class="form-group">
      <label for="name">Cname</label>
    <input type="text" name="cname" value="{{ $categories->cat_name }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Crole</label>
    <input type="text" name="crole" value="{{ $categories->cat_role }}" class="form-control">
    {{ csrf_field() }}
  </div>
  <input type="submit" value="Submit" class="btn btn-default">
</form>
@endsection
