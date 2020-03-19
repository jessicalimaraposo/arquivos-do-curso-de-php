<!DOCTYPE html>
<head>
<title> Formulário de Contato</title>	
</head>

  <body bgcolor="#836FFF">
 
  	<h1><span>Fale conosco</span></h1>

<form autocomplete="off" action = enviarEmail.php method="post">
	
	<label for="Nome:">Nome:</label><br>
		<input name="name" type="text" placeholder="Escreva seu nome" size="40" required/> <br><br><br>

		<label for="E-mail">E-mail</label><br>
			<input name="email"type="email" placeholder="email@example.com" size="40" required><br><br><br>


			<label for="Telefone:">Telefone:</label><br>
				<input id="telefone" name="tel" type="tel" placeholder="(41)99999-9999" size="40" required/><br><br><br>

				<label for="subject:">Assunto</label><br>
					<input id="subject" name="subject" type="text" placeholder="Assunto" size="40" required/><br><br><br>

					<label for="message:">Mensagem:</label><br>
						<textarea name="messagem" rows="10" cols="41" required> </textarea><br><br><br>


	<p><INPUT type="reset"  name="b2" value="Limpar"> 
			<INPUT type="submit" name="b1" value="Enviar"></p>
	
</form> 

<script>
	<?php
         // esse script irá verificar se o fomulário foi enviado
             if(isset($_GET['status'])):
                 if($_GET['status'] == "sucesso"):
                 echo "<script>Materialize.toast('Enviado com sucesso!', 4000);</script>";
                 else:   
                 echo "<script>Materialize.toast('Erro ao enviar', 4000);</script>";
                 endif;
             endif;
        ?>
        	
</script>
   </body> 
</html>