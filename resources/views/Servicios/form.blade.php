<div class="form-group">

<label for="titulo" class="control-label">{{'Titulo'}}</label>


<input type="text" class="form-control {{$errors->has('titulo')?'is-invalid':''}}" name="titulo" id="titulo"

value="{{isset($servicio->titulo)?$servicio->titulo:old('titulo')}}">

{!! $errors->first('Titulo','<div class="invalid-feedback">:message</div>')!!}

</div>




<div class="form-group">
<label for="descripcion"  class="control-label">{{'Descripcion'}}</label>
<input type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" name="descripcion" id="descripcion" 
value="{{isset($servicio->descripcion)?$servicio->descripcion:old('descripcion')}}">
{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')!!}
</div>


<div class="form-group">
<label for="precio" class="control-label">{{'Precio'}}</label>
<input type="text" class="form-control {{$errors->has('precio')?'is-invalid':''}}" name="precio" id="precio" 
value="{{isset($servicio->precio)?$servicio->precio:old('precio')}}">
{!! $errors->first('Precio','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="foto" class="control-label">{{'Foto'}}</label>
@if(isset($servicio->foto))
<br/>

<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$servicio->foto}}" alt="" width="150">
<br/>
@endif
<input class="form-control {{$errors->has('foto')?'is-invalid':''}}" type="file" name="foto" id="foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')!!}
</div>


<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a class="btn btn-primary" href="{{url('servicios')}}">Regresar</a> 