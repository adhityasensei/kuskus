@extends('layout.layoutLogin')

@section('title', 'Kuskus Food Forum')

@section('content')
<div class="container">
    {{-- @if(isset($errors))
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif
    @if(session('success') != NULL)
    <li>{{ session('success') }}</li>
    @endif --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Foto</th>
            <th scope="col">Role</th>
            <th scope="col">Foto</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Join</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
@endsection