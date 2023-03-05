@extends('welcome')
@section('content')
<div class="container">
  <div class="col-md-12 mt-2">
 <span id="aviso">
  
  
Finança: O Melhor Buscador de Empréstimos
A gente busca, você escolhe<br>
Temos mais de 60 instituições financeiras parceiras cadastradas em nosso site. Com um único cadastro, você pode receber até 10 ofertas de crédito pré-aprovadas em até 5 minutos. Após o pedido ser aprovado, o dinheiro cai na conta em até 48 horas.!
 </span>

 
  </div>
  <div class="row ">
    <div class="col-md-6 mt-4 " >
        <img src="{{asset('images/aaa.gif')}}" style="width:240px;height:250px;margin-left:140px;" id="load"><br>

  <span class=" text-danger" id="errorprice" style="margin-left: 12px;font-size:12px"></span>
      @include('sessions.debut')
     
      @include('sessions.table')
      @include('sessions.formulaire')
        @include('fin')

      <hr>

      <div class="alert alert-info cn">
                ATENÇÃO: NÃO exigimos nenhum depósito ou pagamento para análise ou liberação de crédito. TODAS as nossas comunicações por e-mail são feitas através de endereços com o final  Digitalfinancabwf@gmail.com
                Nosso serviço é gratuito, portanto, nunca pedimos pagamentos antecipados. Você somente pagará seu empréstimo ou financiamento, diretamente para o banco ou financeira, após aprovação da sua solicitaçáo                 pelo banco . Ao enviar este pedido, você concorda com os Termos de Uso e  Politica de Privacidade , inclusive, quanto às disposições relacionadas ao SCR.  
       </div>
    </div>

   <div class="col-md-6 mt-4">
   
        <p>
        
          <img src="{{asset('images/6p.webp')}}" style="width:240px;height:250px;margin-left:25px;" class="img"><br>
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
         <br><br><br>
         <div class="alert alert-warning cn" id="infocc">
            💰Finança_BWF Solução financeira para você!!!
            👉https://financabw.epizy.com/
            ☀️Empréstimos, Digital, Pessoal online.
            Mais de  900 milhões de euros emprestados pelo mundo,
            A FINANCA_BWF é uma fintech de empréstimo pessoal que começou sua jornada em 2015. O empréstimo de crédito, quando utilizado de forma consciente e com taxas justas, é um meio para as pessoas seguirem em               frente, realizarem seus sonhos e progredirem cada vez mais.
            ✍email: Digitalfinancabwf@gmail.com
            ✅Oferecemos empréstimo online personalizado de acordo com o perfil de cada cliente a fim de ser uma alavanca 
            para seguir em frente sem prejudicar a saúde financeira.
▶ 
         </div>
   
   </div>
   <div class="col-md-12">
    <p>
     <img src="{{asset('images/po.jpg')}}" style="width:265px;height:250px;" class="img">
      <img src="{{asset('images/ppo.jpg')}}" style="width:265px;height:250px;;" class="img">
  Como funciona o cartão de crédito com a Finança?:<br>
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
   <hr>

   <div class="col-md-12">
    <p>
     <img src="{{asset('images/ss.jpg')}}" style="width:265px;height:250px;" class="img">
      <img src="{{asset('images/vc.jpg')}}" style="width:265px;height:250px;" class="img">
      Empréstimo para Negativado:<br> Simulação Online
      CPF com restrição?<br>  Simule seu empréstimo e receba até 10 ofertas!<br>
      Estado civil;<br>
      Ocupação;<br>
      Número de dependentes;<br>
      Número de cartões de crédito;<br>
      Histórico residencial;<br>
      Histórico de pagamentos;<br>
      Etc;
     

     </p>
   </div>
  <hr>
   <div class="col-md-12">
    <p>
      <img src="{{asset('images/ss1.jpg')}}" style="width:265px;height:250px;" class="img">
      <img src="{{asset('images/i.jpg')}}" style="width:265px;height:250px;margin-left:25px;" class="img">
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

  </div>
</div>


@endsection

