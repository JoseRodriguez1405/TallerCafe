<div class="modal fade" id="modal-delete-{{ $pro->id }}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <form action="{{ action('App\Http\Controllers\ProductoController@destroy', $pro->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Confirme si desea eliminar el producto</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
</div>