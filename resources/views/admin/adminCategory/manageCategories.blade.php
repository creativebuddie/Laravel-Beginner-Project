@extends('admin.layout.adminLayout')

@section('content')


<div class="response">
  @if(@session('success'))
  {{ @session('success') }}
  @endif
</div>


<table class="table">
<tr>
  <th>Cname</th>
  <th>Crole</th>
  <th>Status</th>

</tr>
@foreach($categories as $categorie)
<tr>
  <td>{{ $categorie->cat_name}} </td>
  <td>{{ $categorie->cat_role}} </td>
  <td>{{ $categorie->cat_status}} </td>
  <td><a href='{{ url("adminCategory/edit/{$categorie->id}") }}'>Edit</a></td>
  <td><a href='{{ url("adminCategory/destroy/{$categorie->id}") }}'>Delete</a></td>
</tr>
@endforeach
</table>

@endsection
