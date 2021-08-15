@extends('layouts.app')



@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Selamat Datang {{ucfirst(Auth::user()->name)}}</h1>
    <p class="lead">Anda Login Sebagai Admin!</p>
  </div>
</div>
@endsection
