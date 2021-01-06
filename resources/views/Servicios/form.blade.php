<h1>{{$modo}} servicios </h1>
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Titulo" class="control-label">{{'Titulo'}}</label>
    <input type="text" class="form-control" name="Titulo" id="Titulo" value="{{isset($servicio->Titulo)?$servicio->Titulo:old('Titulo')}}">
</div>

<div class="form-group">
    <label for="Descripcion"  class="control-label">{{'Descripcion'}}</label>
    <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="{{isset($servicio->Descripcion)?$servicio->Descripcion:old('Descripcion')}}">
</div>

<div class="form-group">
    <label for="Precio" class="control-label">{{'Precio'}}</label>
    <input type="text" class="form-control" name="Precio" id="Precio" value="{{isset($servicio->Precio)?$servicio->Precio:old('Precio')}}">
</div>

<div class="form-group">
    <label for="Foto">{{'Foto'}}</label>
        @if(isset($servicio->Foto))
            <br/>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'. $servicio->Foto}}" alt="" width="100">
            <br/>
        @endif
    <input type="file" class="form-control" name="Foto" id="Foto" value="">    
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos">
<a class="btn btn-primary" href="{{url('servicios/')}}">Regresar</a>
<br>