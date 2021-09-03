
<h1>{{$modo}} Carro </h1>


<div class="form.group">

<label for="Marca"> Marca </label>
<input type="text" class="form-control"name="Marca" value="{{ isset($carro->Marca)?$carro->Marca:''}}"id="Marca">
<div/>

<div class="form.group">

<label for="Referencia"> Referencia </label>
<input type="text" class="form-control"name="Referencia"value="{{ isset($carro->Referencia)?$carro->Referencia:''}}"id="Referencia">
<div/>

<div class="form.group">

<label for="Color"> Color </label>
<input type="text"class="form-control"name="Color"value="{{ isset($carro->Color)?$carro->Color:''}}"id="Color">
<div/>

<div class="form.group">
<label for="Tipo"> Tipo </label>
<input type="text"class="form-control"name="Tipo"value="{{ isset($carro->Tipo)?$carro->Tipo:''}}"id="Tipo">
<div/>

<input class="btn btn-success" type="submit"value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{url('carro/') }}"> Regresar </a>

<br>