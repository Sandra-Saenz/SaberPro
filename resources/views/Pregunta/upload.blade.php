<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Seleccione un archivo de preguntas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @include('partials.validation-errors')
            </div>
            <form id="formImport" action="{{route('pregunta.importFile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  <p>
                    Subir una hoja de cálculo con las preguntas que desee guardar. con los campos de: <br>
                    <b>
                      enunciado | respuesta correcta | asignatura | propietario pregunta | respuesta a | respuesta b | respuesta c | respuesta d
                    </b>
                  </p>
                    <i class="fas fa-file-import fa-2x"></i>
                    <input class="form-control" type="file" accept=".xls,.xlsx" required name="archivo_preguntas" id="archivo_preguntas">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" id="confirmExcel">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
