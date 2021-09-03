@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{url('carro/create') }}" class="btn btn-success"> Registrar nuevo Carro </a>
<br/>
<br/>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Referencia</th>
            <th>Color</th>
            <th>Tipo</th>
            
            
        </tr>
    </thead>

    <tbody>
        @foreach ($carros as $carro)
        <tr>
            <td>{{ $carro->id}}</td>
            <td>{{ $carro->Marca}}</td>
            <td>{{ $carro->Referencia}}</td>
            <td>{{ $carro->Color}}</td>
            <td>{{ $carro->Tipo}}</td>
            <td>
                
            <a href="{{url('/carro/'.$carro->id.'/edit') }}" class="btn btn-warning">
                    Editar
            </a>
             | 

            <form action="{{ url('/carro/'.$carro->id)}}"class="d-inline" method="post">
            @csrf
            {{method_field('DELETE') }}
            <input class ="btn btn-danger" type="submit" onclick="return confirm (' ¿Quieres Borrar?')" value="Borrar">


            </form>
            

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection