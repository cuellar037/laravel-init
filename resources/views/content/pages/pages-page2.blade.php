@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
<h2>Datos del Usuario a Generar Excel</h4>

<div class="container">
  <form action="/page-2/excel" method="get">
    <div class="row">
      <div class="col">
        <label for="">User Name</label>
        <input class="form-control my-2" type="text" value="{{Auth::user()->name}}" name="nameUser">
      </div>
      <div class="col">
        <label for="">Email User</label>
        <input class="form-control my-2" type="text" value="{{Auth::user()->email}}" name="emailUser">
      </div>
      <label class="mx-2" for="">Encrypted Password</label>
      <input class="form-control my-2" type="password" readonly value="{{Auth::user()->password}}" name="passUser">
      <button type="submit" class="btn btn-primary my-3">Generar Excel</button>
    </div>
  </form>
</div>


@endsection
