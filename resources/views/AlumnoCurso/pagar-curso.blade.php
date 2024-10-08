<div class="modal fade" id="pagarCurso" tabindex="-1" aria-labelledby="pagarCursoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pagarCursoLabel">
                    <strong>Pagar Curso:</strong> {{ $detalle->nombrecurso ?? '-' }}
                </h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('AlumnoCurso.pagar', $detalle->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <strong>Alumno:</strong>
                            <span>{{ $detalle->Nombres }} {{ $detalle->Apellidos }}</span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <strong>Total a Pagar:</strong>
                            <span>{{ $detalle->precio }}</span>
                        </div>
                        <div class="col-sm-4">
                            <strong>A Cuenta:</strong>
                            <span>{{ $detalle->a_cuenta }}</span>
                        </div>
                        <div class="col-sm-4">
                            <strong>Saldo:</strong>
                            <span>{{ $detalle->saldo }}</span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <strong>Seleccione Método de Pago:</strong>
                            <select name="metodo_pago" class="form-control" required>
                                <option value="Efectivo" selected>Efectivo</option>
                                <option value="Qr">Qr</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <strong>Ingrese Monto:</strong>
                            <input type="number" name="monto" class="form-control" placeholder="Ingrese Monto"
                                required>
                        </div>
                        <div class="col-sm-12">
                            <strong>Observación:</strong>
                            <textarea name="observacion" class="form-control" rows="1" placeholder="Ingrese Observaciones"></textarea>
                        </div>
                        <input type="hidden" name="alumnocurso_id" value="{{ $detalle->id }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Pagar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .modal-dialog {
        max-width: 40%;
    }
</style>
