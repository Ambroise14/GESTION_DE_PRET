
<div class="container mt-5 shadow-none p-3 mb-5 bg-light rounded" id="fin">
  <div class="row">
    <h2 class="text-center">Parabénse  @if(Auth::check()) {{Auth::user()->name}}  @endif,sua solicitação foi concluida com successo</h2>
  @if(isset($p) )
    <table class="table table-bordered shadow-sm p-3 mb-5 bg-body rounded">
      <thead>
        <tr>
          <th>Nuero de solicitação</th>
          <td>{{$p->id}}</td>
        </tr>
        <tr>
          <th>Valor solicitado</th>
          <td>{{$p->valor}}</td>
        </tr>
        <tr>
          <th>prazo de rebolso</th>
          <td>{{$p->prazo}}</td>
        </tr>
        <tr>
          <th>Taxa do mercado</th>
          <td>{{$p->taxa}}</td>
        </tr>

      </thead>
    </table>
  @endif
   
  </div>
</div>
