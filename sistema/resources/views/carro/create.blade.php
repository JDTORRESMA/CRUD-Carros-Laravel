@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/carro')}}" method="post" enctype="mulipart/form.data">
@csrf
@include('carro.form',['modo'=>'Crear']);



</form>

</div>
@endsection