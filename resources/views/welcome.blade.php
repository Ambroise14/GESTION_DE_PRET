<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
 

  <title>FINANÇA_BWF</title>
  <style>
   .img {
  float: right;
  border:0px;
}
.container{
   
    color:black;
    border: solid 0.0px black
}
a{
  text-decoration: none;
}
.p{
  color:white;
}
#aviso{
    font-family: "Audiowide", sans-serif;
     font-size:14px;
}

body {
  font-family: "Sofia", sans-serif;
    background:#F5F5DC;
    font-size-adjust: 0.58;
    font-variant: normal|small-caps|initial|inherit;
}
#nav{
  color:blue
}
.cn{
    font-size:12px;
}
p{
    font-size:13px;  
     font-weight: bold;  
}
  </style>
  @yield('css')
</head>
<body>
  @include('sessions.nav')
  @include('sessions.menuvertical')
 
     <div class="container">
      <div class="row">
        @yield('content')
        <hr>
      </div>
     </div>
   
  @include('sessions.aco')
  @include('sessions.orientation')
    @include('sessions.map')
  @include('sessions.footer')
  <script
			  src="https://code.jquery.com/jquery-3.6.3.js"
			  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
			  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
   crossorigin="anonymous"></script>

   <script>window.rwbp={email:'electronique80digital@gmail.com',phone:'555496672733',message:'Olá,como podemos te ajudar?',lang:'pt-BR'}</script>
   <script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script>
  
   <script>
    var price=0,prazo=0,compteur=0,hortense=0,nickiminaj=0,T=0,ttc=0;
    $(function(){
      //trainement de tableau de resume
      $('#table').hide();
      $('#formulaire').hide();
       $('#ajax').hide();
        $('#fin').hide();
        $('#load').hide();
    })
   </script>

   <script>
     $(document).on('click keyup','.price',function(){
     price=$(this).val();

   })
   $(document).on('click keyup','.prazo',function(){
    prazo=$(this).val();

   })
    $(document).on('click keyup','.enviar',function(){
     compteur=compteur+1;
      if(price=='0' || prazo=='0'){
        $('#errorprice').text('selecione o valor desejado e o prazo de rembolso');
      }else{
        $('#errorprice').text('');
        $('#v').text(price+'€');
        $('#prazooo').text(prazo);
        $('#mmtant').val(price);
        $('#prazop').val(prazo);
        hortense= parseInt(price*0.0199*prazo/47);
        nickiminaj=parseInt(price);
        T=hortense+nickiminaj;
        $('#sandra').text(hortense+'€');
        ttc=parseInt(T/prazo);
        $('#nickiminaj').text(T+'€');
          $('#ttc').text(ttc+'€');
        $('h6').hide();
        $('#table').show();
          compteur=compteur-1;
      }
      
      if(compteur=="3"){
          alert('je vais te bloquer')
      }
    })
    $(document).on('click keyup','.voltardebut',function(){
      $('h6').show();
      $('#table').hide();
    })
    $(document).on('click keyup','#con',function(){
      $('#formulaire').show();
      $('#table').hide();
    })
    $(document).on('click keyup','#voltatable',function(){
      $('#formulaire').hide();
      $('#table').show();
    })
    // traitement finale
    $(document).on('click','#finalisarp',function(){
     var dia,mese,ano,name,renda,email,tel,cpf;
     var img=true;
     dia=$('.dia').val();
      mese=$('.mese').val();
      ano=$('.ano').val();
      name=$('.name').val();
      renda=$('.renda').val();
      email=$('.email').val();
      tel=$('.tel').val();
      cpf=$('.cpf').val();
      if(dia=="Dia"){
        $('.dia').css('border-color', 'red')
        $('.errordia').text('o seu dia de nascimento');
      }else{
        $('.dia').css('border-color', '')
        $('.errordia').text('');
      }
      if(mese=="Mese"){
        $('.mese').css('border-color', 'red')
        $('.errormese').text(' o seu mese de nascimento');
      }else{
        $('.mese').css('border-color', '')
        $('.errormese').text('');
      }
      if(ano=="Ano"){
        $('.ano').css('border-color', 'red')
        $('.errorano').text('o ano do seu  nascimento');
      }else{
        $('.ano').css('border-color', '')
        $('.errorano').text('');
      }

      if(name==""){
        $('.name').css('border-color', 'red')
        $('#nname').text('digite seu name completo'); 
      }else{
        $('.name').css('border-color', '')
        $('#nname').text(''); 
      }

      if(renda==""){
        $('.renda').css('border-color', 'red')
        $('#nrenda').text('digite sua renda mensal'); 
      }else{
        $('.renda').css('border-color', '')
        $('#nrenda').text(''); 
      }
      if(email==""){
        $('.email').css('border-color', 'red')
        $('#nemail').text('digite seu seu email'); 
      }else{
        $('.email').css('border-color', '')
        $('#nemail').text(''); 
      }

      if(tel==""){
        $('.tel').css('border-color', 'red')
        $('#ntel').text('digite seu seu telefone'); 
      }else{
        $('.tel').css('border-color', '')
        $('#ntel').text(''); 
      }
      if(cpf==""){
        $('.cpf').css('border-color', 'red')
        $('#ncpf').text('digite seu seu cpf/NIF'); 
      }else{
        $('.cpf').css('border-color', '')
        $('#ncpf').text(''); 
      }
    
     if(dia!="" && mese!="" && ano!==""&& name!="" && renda!="" && email!="" && tel!="" && cpf!=""){
       $('#load').show();

     }
      var formdata = new FormData($("#formulaire")[0]);
    $.ajax({
        url:"{{url('emprestimo/emprestimo-pessoal/debut')}}",
        type: 'POST',
        data: formdata ,
        processData:false,
        contentType:false,
        success: function (response) {
        if(response.status==200){
        window.location.href="{{url('emprestimo/emprestimo-pessoal/resumo')}}";
        }
        },
       
    });
    })
   </script>
  
</body>
</html>