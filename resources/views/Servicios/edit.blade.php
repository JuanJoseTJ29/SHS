@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/servicios/'.$servicio->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
            @include('servicios.form',['modo'=>'Editar'])
        </form>
    </div>
@endsection
 