
<!-- FORMULÁRIO MODAL -->
<div class="modal fade" id="formulario-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fale conosco!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form>
          <div class="form-group">
              <label for="nome-usuario">Nome</label>
              <input type="text" class="form-control" id="nome-usuario" placeholder="Escreva seu nome aqui">
          </div>
          <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="seuemail@exemplo.com">
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem aqui" ></textarea>
          </div>
        </form>
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn botao-padrao">Enviar</button>
      </footer>
    </dialog>
  </div>
</div>