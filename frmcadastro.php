<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Novo UsuÃ¡rio</title>
                <meta charset="UTF-8">
	        <!--<meta HTTP-EQUIV="refresh" CONTENT="1">-->
		<!-- Inclusï¿½o do Jquery -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ></script>-->
                <script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Inclusï¿½o do Jquery Validate -->
		<!--<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>-->
                <script type="text/javascript" src="js/validate.js"></script>
		<!-- Validaï¿½ï¿½o do forumlï¿½rio -->
		<script type="text/javascript">
			$(document).ready(function(){
						 
			    $('#meu_form').validate({
			   
					rules:{ 
						login:{ 
                                                    required: true,
                                                    remote: 'includes/verificaemail.php'
                                                    },//,
                                                conflogin:{
                                                  required: true,
                                                  equalTo: "#login"
                                                },                                
                                             senha:{ 
                                                 required: true
                                                 },
                                              confsenha:{ 
                                                 required: true,
                                                 equalTo: "#senha"
                                                 },
                                               
                                                    /*cÃ³digo meu*/
                                             termos: "required"
                                        /*fim cÃ³digo meu*/
					},
                                        
                                      
					messages:{
						login:{ 
                                                     required: 'Este Campo &eacute; obrigat&oacute;rio' , 
                                                     remote: '<font color="red">Este Login j&aacute; est&aacute; em uso.</font>'},//,
                                                conflogin:{
                                                       required: "O campo confirmaÃ§Ã£o de email Ã© obrigatorio.",
                                                       equalTo: '<font color="red">O campo confirmaÃ§Ã£o de email deve ser identico ao campo email.</font>'
                                                     },
                                                senha:{ 
                                                       required: 'Este Campo &eacute; obrigat&oacute;rio' 
                                                      },
                                                confsenha:
                                                      { 
                                                         required: 'Este Campo &eacute; obrigat&oacute;rio', 
                                                         equalTo:  '<font color="red">O campo confirmaÃ§Ã£o de senha deve ser identico ao campo senha.</font>'
                                                      },
					         termos: "Para se cadastrar vocÃª deve aceitar os termos de uso."
                                              }
					});
			
                                    });
			
			
					
					window.onload = function() {
					
                    // $('#login').keypress function(){alert("");});
					  
                       $("#login").keypress(function() {

					     $('div.loader').show();
                     });
									
                       $("#login").focusout(function() {

					     $('div.loader').hide();
                     });									
					 $("#login").keyup(function() {
                       $('div.loader').hide();
                     });
			
            
	</script>
                
 </head>
<body>
    
 
    
   
<h1>Cadastro de Usuario</h1>
<form id="meu_form" action="novoUsuario.php" method="post" >
                <!--Login:<br />-->
                <label>Digite um nome</label><br/>
                <input type="text" name="nome" id="nome" />
		<br />
                <label>Digite um email válido</label><br/>
                <input type="text" name="login" id="login" />
		<br />
                  <label>Confirme o  email</label><br/>
                <input type="text" name="conflogin" id="conflogin" />
		<br />
		Senha:<br />
		<input type="password" name="senha" id="senha"/><br />
                <label>Confirme a Senha</label><br/>
		<input type="password" name="confsenha" id="confsenha"/><br />
                Aceito os termos e condicoes:<br />
		<input type="checkbox" name="termos" id="termos"><br />
		<input type="submit" value="Cadastrar" />
	</form>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>