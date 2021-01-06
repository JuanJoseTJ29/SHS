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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{asset('storage').'/'.$servicio->foto}}" class="img-thumbnail img-fluid" alt="" width="100"></td>
                        <td>{{$servicio->titulo}}</td>
                        <td>{{$servicio->descripcion}}</td>
                        <td>{{$servicio->precio}}</td>
                        <td> 
                            <a class="btn btn-warning" href="{{url('/servicios/'.$servicio->id.'/edit')}}">Editar</a>
                            <form action="{{ url('/servicios', ['servicio' => $servicio->id]) }}" class="d-inline" method="post">
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