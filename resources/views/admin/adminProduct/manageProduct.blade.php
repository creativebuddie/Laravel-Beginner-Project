@extends('admin.layout.adminLayout')

@section('content')


<div class="response">
  @if(@session('success'))
  {{ @session('success') }}
  @endif
</div>


<table class="table">
<tr>
  <th>Pname</th>
  <th>Pprice</th>

</tr>
@foreach($product as $products)
<tr>
  <td>{{ $products->pro_name}} </td>
  <td>{{ $products->pro_price}} </td>
  <td><a href='{{ url("adminProduct/edit/{$products->id}") }}'>Edit</a></td>
  <td><a href='{{ url("adminProduct/destroy/{$products->id}") }}'>Delete</a></td>
</tr>
@endforeach
</table>

@endsection
