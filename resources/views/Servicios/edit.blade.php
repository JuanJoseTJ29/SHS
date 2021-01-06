@extends('layouts.app')

@section('content')

<form action="{{url('/servicios/'.$servicio->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('servicios.form',['Modo'=>'editar'])

</form>

</div>
@endsection