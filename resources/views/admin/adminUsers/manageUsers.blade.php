@extends('admin.layout.adminLayout')

@section('content')


<div class="response">
  @if(@session('success'))
  {{ @session('success') }}
  @endif
</div>


<table class="table">
<tr>
  <th>Name</th>
  <th>Email</th>
  <th>DOB</th>
  <th>Status</th>
</tr>
@foreach($admin as $admrec)
<tr>
  <td>{{ $admrec->name}} </td>
  <td>{{ $admrec->email}} </td>
  <td>{{ $admrec->dob}} </td>
  <td>{{ $admrec->status}} </td>
  <td><a href='{{ url("adminUsers/edit/{$admrec->id}") }}'>Edit</a></td>
  <td><a href='{{ url("adminUsers/destroy/{$admrec->id}") }}'>Delete</a></td>
</tr>
@endforeach
</table>

@endsection
