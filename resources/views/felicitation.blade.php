@extends("welcome")
@section('content')
<div class="container mt-5">
  <div class="row">
    <h2 class="text-center">Parabénse  {{Auth::user()->name}},sua solicitação foi concluida com successo</h2>
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
    <div class="alert alert-info mt-2">
      Atenção:O Finança nao exigir nemhum pagamento antes o liberação de emprestimo
     </div>
  </div>

    <div class="col-md-12">
      <p>
        <img src="{{asset('images/vn.jpg')}}" style="width:230px;height:240px;margin-left:25px;" class="img"><br>
        vantagens FINANÇA_BWF:<br>
        1.Empréstimo com juros baixo<br>
        2.Simulação de empréstimo grátis<br>
        3.Empréstimo rápido e fácil<br>
        4.Empréstimo seguro <br>
        ▶Os tipos de crédito:<br>
        
        ✅Empréstimo pessoal<br>
        ✅Empréstimo com garantia<br>
        ✅Empréstimo com antecipação do FGTS
       
  
       </p>
     </div>

     <div class="col-md-12">
      <p>
        <img src="{{asset('images/i.jpg')}}" style="width:230px;height:240px;margin-left:25px;" class="img"><br>
       O empréstimo pessoal mais famoso do Brasil com taxas únicas e diversificadas que atendem as expectativas de seus clientes.<br>
        É o momento de tirar os projetos do papel e organizar a vida financeira! <br>
       
  
       </p>
     </div>
  </div>
</div>
@endsection