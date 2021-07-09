<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">listado de preguntas de </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @include('partials.validation-errors')
            </div>
            <form id="formImport" action="{{route('pregunta.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                    {{--
                    @forelse($ask->preguntaAsignatura as $programa)
                      <li>{{ $ask->enunciado }}</li>
                      @empty
                      <li>No hay Preguntas y Respuestas asociados</li> <br>
                    @endforelse --}}
                </div>

                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-link" data-dismiss="modal">volver</button> --}}
                    <button class="btn btn-primary" id="confirmExcel">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
