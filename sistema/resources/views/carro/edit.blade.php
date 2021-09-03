@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/carro/'.$carro->id)}}" method="post" enctype="mulipart/form.data" >
@csrf 
{{ method_field('PATCH') }}
 
@include('carro.form',['modo'=>'Editar']);

</form>

</div>>
@endsection
