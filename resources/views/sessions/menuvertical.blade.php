<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Accesso Rápido</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="{{url('/')}}">Simulação de empréstimo grátis</a></li>
       @if(Auth::check())
       <li class="list-group-item"><a href="{{url('emprestimo/emprestimo-pessoal/resumo')}}">Estado da minha solicitação</a></li>
       @endif
      <li class="list-group-item"><a href="{{url('/')}}">Empréstimo para Negativado</a></li>
    </ul>
  </div>
</div>


