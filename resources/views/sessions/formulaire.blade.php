<h4>
  <form method="post" id="formulaire" class="shadow-sm p-3 mb-5 bg-body rounded">
    
      <div class="row">
        <div class="form-group mt-2">
          <input type="text" class="form-control name" name="name"  placeholder="Digite seu nome completo"/>
          <span id="nname" style="font-size:12px" class="text-danger"></span>  
        </div>
        <h5>
                
          
          <div class="form-group mt-3 col-md-12 input-group">
          <select class="form-select form-select-sm dia" aria-label=".form-select-sm example"
           name="dia" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:12px">
            <option selected>Dia</option>
            <option value="1">1</option><option value="2">2</option>
            </option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option>
            <option value="7">7</option><option value="8">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
            <option value="13">13</option><option value="14">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option>
            <option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
            <option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            
          </select>
       
          
         <select name="mese" class="form-select form-select-sm mese"
          aria-label=".form-select-sm example" 
          style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:12px;margin-left:7px">
           <option selected>Mese</option>
           <option value="01">Janeiro</option><option value="02">fevereiro</option><option value="03">Março</option><option value="04">Abril</option><option value="05">Maio</option>
           <option value="06">Junho</option><option value="07">Julho</option><option value="08">Agosto</option><option value="09">setembro</option><option value="10">Outobro</option>
           <option value="11">Novembro</option><option value="12">Dezembro</option>
         </select>
         <span id="mmese" style="font-size:12px" class="text-danger"></span>  
         <select class="form-select form-select-sm ano" aria-label=".form-select-sm example" name="ano"
          style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:12px;margin-left:15px">
           <option selected>Ano</option>
           <option value="2003">2003</option><option value="2002">2002</option>
           </option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option>
           <option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option>
           <option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option>
           <option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option>
           <option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option>
           <option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option>
           <option value="1972">1972</option>
           <option value="1971">1971</option>
           <option value="1970">1970</option>
         </select><br>
         </div>
         <div class="input-group">
          <span id="ddia"style="font-size:8px; margin-left:0px;" class="text-danger errordia"></span> 
         <span id="ddia"style="font-size:8px;margin-left:10px ;" class="text-danger errormese"></span>
         <span id="ddia"style="font-size:8px;margin-left:40px;" class="text-danger errorano"></span> 
         </div>
       
        </h5>
       
        <div class="form-group mt-2 col-12">
          <input type="text" class="form-control cpf" name="cpf"  id="cpf" placeholder="Digite o número de seu CPF/NIF"/>
          <span id="ncpf" style="font-size:12px" class="text-danger"></span>  
        </div>
        <div class="form-group mt-2 col-12">
          <input type="text" class="form-control tel" name="tel"  placeholder="Digite seu celular"/>
          <span id="ntel" style="font-size:12px" class="text-danger"></span>  
        </div>
        <div class="form-group mt-2 col-12">
          <input type="email" class="form-control email" name="email"  placeholder="Digite seu email"/>
          <span id="nemail" style="font-size:12px" class="text-danger"></span>  
        </div>
        <div class="form-group mt-2 col-">
          <input type="number" class="form-control renda" name="renda"  placeholder="Qual é a sua  renda mensal ?"/>
          <span id="nrenda" style="font-size:12px" class="text-danger"></span>  
          
        </div>
      
        <div class="form-group mt-2 col-6">
          <span style="font-size:12px">Envie  frente da sua identidade</span>
          <input type="file" class="form-control" name="frente"  />
     
        </div>
        <div class="form-group mt-2 col-6">
          <span style="font-size:12px">Envie  verso da sua identidade</span>
          <input type="file" class="form-control" name="verso"  placeholder="Digite seu email"/>
        
        </div>
       <span><button type="button" class="btn btn-danger btn-sm mt-1" id="voltatable">voltar</button> 
          <button type="button" class="btn btn-warning mt-1 float-end" id="finalisarp">Finalizar Meu Empréstimo</button></span>
        
      </div>
    
        <input type="hidden" value="1,99" name="taxa">
        <input type="hidden" name="valor" id="mmtant">

        <input type="hidden"  name="prazo" id="prazop">

    </form>
 </h4>