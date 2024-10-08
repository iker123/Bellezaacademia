<h1>{{ $modo }} Curso </h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{$errors}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="form-group">
<label for="nombrecurso"> Nombre del Curso </label>
<input type="text" class="form-control" name="nombrecurso"
     value="{{isset($cursos->nombrecurso)?$cursos->nombrecurso:old('nombrecurso')}}" id="nombrecurso">
</div>
<br>
<div class="form-group">
    <label for="duracion_curso_id">Seleccionar una Duración</label>
    <select name="duracion_curso_id" id="duracion_curso_id" class="form-control" required>
    <option value="">Seleccionar una duración</option>
    @foreach ($duracions as $duracion)
        <option value="{{ $duracion->id }}">Fecha inicio: ({{$duracion->fechaInicio}}) - Fecha Fin: ({{$duracion->fechaFin}})</option>
    @endforeach
    </select>
</div>
<br>
<div class="form-group">
    <label for="precio"> Precio.bs</label>
    <input type="text" class="form-control" name="precio"
         value="{{isset($cursos->precio)?$cursos->precio:old('precio')}}" id="precio">
    <br>
    </div>
<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{url('Curso/')}}">Regresar</a>
<br>
