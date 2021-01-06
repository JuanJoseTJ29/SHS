
@extends('layouts.app')

@section('content')

<div class="container">



@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>

</div>
@endif

Seccion para crear servicios

<form action="{{url('/servicios')}}" class="form-horinzontal" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@include('servicios.form',['Modo'=>'crear'])

</form>
</div>
@endsection