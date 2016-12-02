<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">¿Por que se anula el cambio?</h4>
      </div>
      <form action="panelAdministrador.php?page=detalle" method="post">
        <div class="modal-body">
          <input type="hidden" id="idCambio" name="idCambio" value="">
          <input type="hidden" id="estado" name="estado" value="anulado">
          <textarea name="observacion" id="observacion" cols="80" rows="5 placeholder='Observacion..."></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
      </form>
    </div>
  </div>
</div>