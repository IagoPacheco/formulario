!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastro de Condomínio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        *{ margin:10px; padding:0;}   
        body {font:100% normal arial, helvetica, sans-serif;background:white;}
        Form, input, select, textArea {margin: 10px; padding: 0; color:black;border-radius: 10px; }        
        Div.Box {
            margin: 10px; 
            width: 1000px;
            background: white;
            position: relative;
            color: #08298A;
            font-size: 18px;         
            line-height: 1.5;
        }
        Div.Box h2 {
            margin: 10px; 
            color: #08298A;
            font-size: 40px;
            text-transform: uppercase; 
            padding: 5px 0 5px 5px;
        }
        Div.Box h6 {
            margin: 10px; 
            color: #08298A;
            font-size: 20px;
            text-transform: capitalize;
            padding: 5px 0 5px 5px;
            align-items: baseline; 
        }
	 Div.box label {
              margin: 10px; 
	      width:100%;
	      color:#08298A;
	      display: inline;
	      background:white;
	      padding:10px 0 10px 0;
	      font-size:18px;
	}
          
        Div.box select {
            color: black;
            display: inline;
            background: white;
            font-size: 18px;
            
        }
        Div.Box .input_text {
            padding: 10px 10px;
            width: 200px;
            background: white;
        }
        
        Div.Box label span {
            margin: 10px; 
            display: block;
            color: white;
            font-size: 18px;
            float: left;
            width: 100px;
            text-align: right;
            padding: 5px 20px 0 0 ;
        }
        Div.box .message {
            padding: 7px 7px;
            width: 350px;
            background: white;
            overflow: hidden;
            height: 150px;          
        }     
        
        Div.box .button{
            margin: 10px; 
            padding: 4px 7px;
            background: red;
            border: 0px;
            position: relative;
            top: 10px;
            
            width: 100px;             
        }
        
        
        
        </style>
    </head>
<script>
function addmorador(){
            var e = document.getElementById("txtqtdmoradores");
            var qtd = e.value;
            var div = document.getElementById("DadosMoradoresAdicionais");
			var i= parseInt(qtd)+1;
				
			
			e.value=i; 
            var html=div.innerHTML;
   
               html+= " <table border=0 id='tbDadosMoradoresAdicionais"+ i +"'><tr align=center><td width=300><input type='text' name=txtnomead"+ i 
                   +" size=50 required></td><td width=250><input type='text' name=txtgrauad"+ i +" size=30 required class='controle'></td><td width=100><input type='text' name=txtidadead"+ i 
                   +" size=20 required class='controle'></td></tr></table>";

                         div.innerHTML=html;
        }

function limparmorador(){
            var e = document.getElementById("txtqtdmoradores");
            var qtd = e.value;
            var div = document.getElementById("DadosMoradoresAdicionais");
			var i= parseInt(qtd);
				
		
			e.value=i; 
            var html="";
   
           div.innerHTML=html;
        }
function addEmpregada(){
            var e = document.getElementById("slctqtdEmpregada");
            var qtd = e.options[e.selectedIndex].value;
            var div = document.getElementById("empregadaDados");
            var html="";
            for(var i=1;i<=qtd;i++){
               html+= " <table border=0 id='tbEmpregada"+ i +"'><tr align=center><td> Empregada doméstica da casa <input type='text' name=txtnomeEmpregada size=50 required></td>\n\
                        <td>Telefone <input type='text' name=txtTelefoneEmpregada size=20 required class='controle'></td></tr>\n\
                        <tr><td colspan=2> Endereço <input type='text' name=txtEndereco size=112 required class='controle'></td></tr></table>";
                         }
                         div.innerHTML=html;
        }    
        

function addCarros(){
            var e = document.getElementById("txtqtdcarros");
            var qtd = e.value;
            var div = document.getElementById("tbDadosCarros");
            var i= parseInt(qtd)+1;
				e.value=i;
			var html=div.innerHTML;
        
               html+= "<table border=0 id='tbDadosCarros"+ i +"'><tr align=center>\n\
                       <td width=400>Veículo <input type='text' name=txtVeiculo"+ i +" size=10 required class='controle'></td>\n\
                       <td>Marca <input type='text' name=txtMarca"+ i +" size=10 required class='controle'></td>\n\
                       <td>Placa <input type='text' name=txtPlaca"+ i +" size=10 required class='controle'></td>\n\
                       <td>Vaga <input type='text' name=txtVaga"+ i +" size=10 required class='controle'></td></tr></table>";
                       
                         div.innerHTML=html;
        }
function dltCarros(){
            var e = document.getElementById("txtqtdcarros");
            var qtd = e.value;
            var div = document.getElementById("tbDadosCarros");
            var i= 0;
			e.value=0;
			var html=div.innerHTML;
        
               html= "";
                       
                         div.innerHTML=html;
        }
		
 function addProprietario(){
            var e = document.getElementById("sltTipoMorador");
            var qtd = e.options[e.selectedIndex].value;
            var div = document.getElementById("DadosProp");
            var html="";
            for(var i=2;i<=qtd;i++)
            {
               html+= " <table border=0 id='tbProprietario'><tr align=center><td>Nome Proprietário: <input type='text' name=txtnomeProprietario size=50 required></td>\n\
                        <td> RG <input type='text' name=txtRGProprietario size=30 required class='controle'></td></tr>\n\
                        <td> CPF <input type='text' name=txtCPFroprietario size=30 required class='controle'></td></tr>\n\
                        <td> Endereço <input type='text' name=txtEnderecoProprietario size=30 required class='controle'></td></tr>\n\
                        <td> Cidade <input type='text' name= txtCidadeProprietario size=30 required class='controle'></td></tr>\n\
                        <td> Estado <input type='text' name=txtEstadoProprietario size=30 required class='controle'></td></tr>\n\
                        <td> Tel. Residencial <input type='text' name=txtTelResProprietario size=30 required class='controle'></td></tr>\n\
                        <td> Tel. Comercial <input type='text' name=txtTelComProprietario size=30 required class='controle'></td></tr>\n\
                        <td> Tel. Celular <input type='text' name=txtTelCelProprietario size=30 required class='controle'></td></tr>\n\
                        <td> Email <input type='text' name=txtEmailroprietario size=30 required class='controle'></td></tr>\n\
                        <td> Administrador da Locação: <input type='text' name=txtNomeAdmLocacao size=30 required class='controle'></td></tr>\n\
                        <td> Endereço <input type='text' name=txtEnderecoAdmLocacao size=30 required class='controle'></td></tr>\n\
                        <td> Cidade <input type='text' name=txtCidadeAdmLocacao size=30 required class='controle'></td></tr>\n\
                        <td> Estado <input type='text' name=txtEstadoAdmLocacao size=30 required class='controle'></td></tr>\n\
                        <td> Telefone <input type='text' name=txtTelefoneAdmLocacao size=30 required class='controle'></td></tr>\n\
                        <td> Email <input type='text' name=txtEmailAdmLocacao size=30 required class='controle'></td></tr>";
            }
                         div.innerHTML=html;
        }    
               
  function continuar(){
  var inputs = document.getElementsByClassName("controle");
  if (validationInput(inputs) == true){
  	document.getElementById("btenviar").style.display="none";
  	var div = document.getElementById("divassinatura");
  	div.innerText ="Assinatura do(a) Condomino(a)__________________________________________________ Data:____/_____/________";
  	window.print();
    alert("Dados Cadastrados com Sucesso!");

  }else{
    alert("Campos obrigatorios nao preenchidos!");
  }

}

function validationInput(inputs){
  var resutado = true;
  for(var i = 0; i < inputs.length; i++){
      if (inputs[i].hasAttribute('required') ){
        if (inputs[i].value == ""){

          inputs[i].style.background = "Red";
          inputs[i].placeholder = "Campo obrigatorio!"
          resutado = false;
        }
      }
    }
  return resutado;
}      
        
  
 </script>

    <body>
        <form name="frmCadastro" method="Post">
            <Div class="Box">
                <div class="box">
                <h2 align="center"> Cadastro de Morador</h2>
                <h6> Novo Morador </h6>   
                
                <label> Tipo de Morador </label>
                <select name="sltTipoMorador" id="sltTipoMorador" onChange="addProprietario()">
                  <option value="2" selected>Inquilino</option>
                  <option value="1">Proprietario</option>
                </select>
                </select>
                
                <label> Apto: </label>
                <input type="text" name="txtapto" size="5">
                 <label> Bloco: </label>
                 <input type=text name="txtbloco" size="5">
               </Div>
            <Div id="dadosPessoais" class="Box">
                <label> Nome: </label>
                <input type= "text" name="txtNome" size="80"> <br> 
                <label> RG: </label>
                <input type= "text" name="txtRG" size="20"> 
                <label> CPF: </label> 
                <input type= "text" name="txtCPF" size="20"> <br> 
                <label> Telefones: </label>
                <label> Residencial: </label>
                <input type= "text" name="txtTelefonesResidencial" size="20"> <br> 
                <label> Comercial: </label>
                <input type= "text" name="txtComercial" size="20"> 
                <label> Celular: </label> 
                <input type= "text" name="txtCelular" size="20"> <br> 
                <label> Em caso de emergência, indique uma pessoa com telefone para contato imediato: </label> <br> 
                <label> Nome do contato: </label>
                <input type= "text" name="txtNomeContato" size="30">  
                <label> E-mail: </label> 
                <input type= "text" name="txtEmail" size="20"> <br> 
                <label> Telefone do contato: </label>
                <input type= "text" name="txtTelefoneContato1" size="20"> 
                <label> / </label>
                <input type= "text" name="txtTelefoneContato2" size="20"> <br> 
                
                <div id="moradoresadicionais" class"box">
					 <label> Moradores Adicionais:</label>
					 <input type="button" name="button" id="button" value="+" onClick="addmorador();">
					 <input name="txtqtdmoradores" type="hidden" id="txtqtdmoradores" value="0">
				  <input type="button" name="button2" id="button2" value="Excluir Moradores" onClick="limparmorador();">
			 		 <table border=0 id="tbDadosMoradoresAdicionais">
		 		       <tr align=center><td width=380 align=center>Moradores da unidade</td><td width=300 align=center>Grau de Parentesco</td><td width=185 align=center>Idade</td></tr>
					 </table>
					 <div id="DadosMoradoresAdicionais" class="box">

					 </div>
			</div>
                
                

                <div id="empregada" class"box">
					 <label>Possui empregada? 
					   <select name="slctEmpregada" id="slctqtdEmpregada" onchange="addEmpregada();" class="controle" required>
					     <option value="0">Não</option>
					     <option value="1">Sim</option>
				       </select>
					 </label>
					 <br>
			      <div id="empregadaDados" class="box">
			        
			        </div>
		</div>
                
                             
                <div id="carros" class = "box">
					 <label>Quantidade de Veículos:</label>
					 <input type="button" name="btnaddcarro" id="button3" value="+" onClick="addCarros();">
							 <input name="txtqtdcarros" type="hidden" id="txtqtdcarros" value="0">
							 <input type="button" name="btndltCarros" id="btndltCarros" value="Excluir Carros" onClick="dltCarros();">
			 		 <div id="tbDadosCarros" class="box">
			 		   
		 		     </div>
			</div>
           </Div>
                                
                
                    <Div id="DadosProp" class="Box"> </Div> 
                
          </div>
            
            <Div id= "divassinatura" class="Box"> </Div>
            
            
            <div class ="Box"> <input type="submit" value="Enviar" onclick="continuar();" id="btenviar">  </div> 
        
        </form>
    </body>
</html>
