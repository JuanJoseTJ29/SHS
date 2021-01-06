<div class="form-group">

<label for="Nombre" class="control-label">{{'Nombre'}}</label>


<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre"

value="{{isset($servicio->Nombre)?$servicio->Nombre:old('Nombre')}}">

{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}

</div>




<div class="form-group">
<label for="ApellidoPaterno"  class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" name="ApellidoPaterno" id="ApellidoPaterno" 
value="{{isset($servicio->ApellidoPaterno)?$servicio->ApellidoPaterno:old('ApellidoPaterno')}}">
{!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>')!!}
</div>


<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" name="ApellidoMaterno" id="ApellidoMaterno" 
value="{{isset($servicio->ApellidoMaterno)?$servicio->ApellidoMaterno:old('ApellidoMaterno')}}">
{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="Correo"class="control-label">{{'Correo'}}</label>
<input type="email"  class="form-control {{$errors->has('Correo')?'is-invalid':''}}" name="Correo" id="Correo" 
value="{{isset($servicio->Correo)?$servicio->Correo:old('Correo')}}">
{!! $errors->first('Control','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<input type="int" class="form-control {{$errors->has('Telefono')?'is-invalid':''}}" name="Telefono" id="Telefono" 
value="{{isset($servicio->Telefono)?$servicio->Telefono:old('Telefono')}}">
{!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="ServiciosOfrecidos" class="control-label">{{'Servicios Ofrecidos'}}</label>
<input type="text" class="form-control {{$errors->has('ServiciosOfrecidos')?'is-invalid':''}}" name="ServiciosOfrecidos" id="ServiciosOfrecidos" 
value="{{isset($servicio->ServiciosOfrecidos)?$servicio->ServiciosOfrecidos:''}}">

{!! $errors->first('ServiciosOfrecidos','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($servicio->Foto))
<br/>

<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$servicio->Foto}}" alt="" width="150">
<br/>
@endif
<input class="form-control {{$errors->has('Telefono')?'is-invalid':''}}" type="file" name="Foto" id="Foto" value="">
{!! $errors->first('Fotos','<div class="invalid-feedback">:message</div>')!!}
</div>


<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a class="btn btn-primary" href="{{url('servicios')}}">Regresar</a> 