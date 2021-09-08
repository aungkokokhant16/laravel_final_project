@extends('layouts.adminlayout')
@section('content')
    <h1>Manage premium user</h1>
    <table class="table table-hover">
  <thead class="black white-text">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">IsAdmin</th>
      <th scope="col">IsPremiun</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>

        <td>1</td>
        <td>AKKK</td>
        <td>Gmail@gmail.com</td>
        <td>true</td>
        <td>true</td>
        <td><button class="btn btn-sm green white-text">update</button></td>
        <td><button class="btn btn-sm red white-text">delete</button></td>
    </tr>
  </tbody>
</table>
@endsection
