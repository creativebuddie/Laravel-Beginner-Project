@extends('admin.layout.adminLayout')

@section('content')

<form  method="POST" action="{{ url('adminProduct/store') }}">

  <div class="form-group">
    <select class="form-control" name="cname">
    <option value="" selected="selected">Select Category</option>
    @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group">
      <label for="name">Pro Name</label>
    <input type="text" name="pname" class="form-control">
  </div>
  <div class="form-group">
      <label for="name">Pro Price</label>
    <input type="text" name="pprice" class="form-control">
  </div>
  <div class="form-group">
      <label for="name">Pro Quantity</label>
    <input type="text" name="pquantity" class="form-control">
  </div>
  <div class="form-group">
      <label for="name">Pro Discount</label>
    <input type="text" name="pdiscount" class="form-control">
  </div>
  <div class="form-group">
      <label for="name">Pro Description</label>
    <input type="text" name="pdescription" class="form-control">
      {{ csrf_field() }}
  </div>
  <input type="submit" value="Submit" class="btn btn-default">
</form>



@endsection
