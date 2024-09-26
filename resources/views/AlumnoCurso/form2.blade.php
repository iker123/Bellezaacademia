<h1>{{ $modo }} AlumnoCurso</h1>

<!-- Mostrar errores en caso de que existan -->
@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Selección de Alumno -->
<div class="form-group">
    <label for="Alumnos_id">Nombre del Alumno</label>
    <select name="Alumnos_id" id="Alumnos_id" class="form-control" required>
        <option value="">Seleccionar alumno</option>
        @foreach ($alumnos as $alumno)
            <option value="{{ $alumno->id }}" @if ($alumno->id == $detalle->Alumnos_id) selected @endif>
                {{ $alumno->Nombres }} {{ $alumno->Apellidos }}
            </option>
        @endforeach
    </select>
</div>

<!-- Selección de Curso -->
<div class="form-group mt-3">
    <label for="cursos_id">Nombre del Curso</label>
    <select name="cursos_id" id="cursos_id" class="form-control" required>
        <option value="">Seleccionar curso</option>
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}" @if ($curso->id == $detalle->cursos_id) selected @endif>
                {{ $curso->nombrecurso }}
            </option>
        @endforeach
    </select>
</div>

<!-- Campo de Calificación -->
<div class="form-group mt-3">
    <label for="Calificacion">Calificación</label>
    <input type="number" name="Calificacion" id="Calificacion" class="form-control" value="{{ $detalle->Calificacion }}" required>
    <small class="form-text text-muted">Nota: Si la calificación es menor a 51, el alumno será reprobado.</small>
</div>

<!-- Botones -->
<div class="mt-4">
    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-primary" href="{{ url('AlumnoCurso/') }}">Regresar</a>
</div>
