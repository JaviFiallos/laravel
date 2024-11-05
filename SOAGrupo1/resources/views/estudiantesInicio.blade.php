@extends('template')
@section('title','Mostrar Estudiantes')
@section('content')

<h1>Lista de Estudiantes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    @foreach($estudiantesArray as $estudiante);
    <tr>
      <th scope="row">1</th>
      <td>{{$estudiante['cedula']}}</td>
      <td>{{$estudiante['nombre']}}</td>
      <td>{{$estudiante['apellido']}}</td>
      <td>{{$estudiante['direccion']}}</td>
      <td>{{$estudiante['telefono']}}</td>
    </tr>
    @endoreach
  </tbody>
</table>
@endsection