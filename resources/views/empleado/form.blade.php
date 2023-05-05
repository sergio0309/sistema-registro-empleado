<!-- Formulario que tendra datos en comun con create y edit -->
<h1>{{ $modo }} EMPLEADO</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>
                {{ $error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="nombre">
        <span>Nombres</span>
    </label>
    <input class="form-control" type="text" name="nombre"
    value="{{ isset($empleado->nombre) ? $empleado->nombre : old('nombre') }}" id="nombre">
</div>

<div class="form-group">
    <label for="apellidoPaterno">
        <span>Apellodo Paterno</span>
    </label>
    <input class="form-control" type="text" name="apellidoPaterno"
    value="{{ isset($empleado->apellidoPaterno) ?$empleado->apellidoPaterno : old('apellidoPaterno') }}" id="apellidoPaterno">
</div>
<div class="form-group">
    <label for="apellidoMaterno">
        <span>Apellodo Materno</span>
    </label>
    <input class="form-control" type="text" name="apellidoMaterno"
    value="{{ isset($empleado->apellidoMaterno) ? $empleado->apellidoMaterno : old('apellidoMaterno') }}" id="apellidoMaterno">
</div>
<div class="form-group">
    <label for="correo">
        <span>Correo</span>
    </label>
    <input class="form-control" type="email" name="correo"
    value="{{ isset($empleado->correo) ? $empleado->correo : old('correo') }}" id="correo">
</div>
<div class="form-group">
    <label for="foto">
        <span>Foto</span>
    </label>
    @if( isset($empleado->foto) )
   <figure>
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
    </figure>
    @endif
    <input class="form-control" type="file" name="foto" value="" id="foto">
</div><br>
<input class="btn btn-success"  type="submit" value="{{$modo}} EMPLEADO">
<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>
