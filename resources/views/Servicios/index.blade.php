@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('mensaje')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{url('servicios/create')}}"class="btn btn-success">Registrar un nuevo Servicio</a>
        <br/>
        <br/> 
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicios)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{asset('storage').'/'.$servicios->Foto}}" class="img-thumbnail img-fluid" alt="" width="2000"></td>
                        <td>{{$servicios->titulo}}</td>
                        <td>{{$servicios->descripcion}}</td>
                        <td>{{$servicios->precio}}</td>
                        <td> 
                            <a class="btn btn-warning" href="{{url('/servicios/'.$servicios->id.'/edit')}}">Editar</a>
                            <form action="{{ url('/servicios', ['servicios' => $servicios->id]) }}" class="d-inline" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $servicios->links()!!}
    </div>
@endsection