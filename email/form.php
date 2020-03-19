<?php
    session_start();
    //Recebe o valor digitado no campo nome
    $nome = $_POST['nome'];
    
    //Verificar se o usuário preencheu o campo
    if(empty($nome)){
        echo "<br>Campo nome obrigatorio";
        $_SESSION['erroCampoNome'] = "Campo nome obrigatorio";
        header("Location: form.php");
    }
    
    //Verificar a existencia da variavel $_POST['nome']
    if(isset($_POST['nome'])){
        echo "<br>Existe Variavel";
        if(!empty($_POST['nome'])){
            echo "<br>Campo Preenchido";
        }
    }
?>
<!DOCTYPE html>
<head>  
<meta charset="UTF-8">
        <title> Formulário HTML </title>
</head>


 <body bgcolor="#A4A4A4">
    
    <h1><span>Entre em contato comigo</span></h1>

        <form autocomplete="off" action = form.php method="post">
    
            <label for="Nome:">Nome:</label><br>
                <input name="name" type="text" placeholder="Escreva seu nome" size="40"/> <br><br><br>
    

            <label for="Nome:">Sobrenome:</label><br>
                <input name="sobrenome" type="text" placeholder="Escreva seu sobrenome" size="40" /> <br><br><br>
    
                    <P>
                <INPUT type="reset"  name="b2" value="Limpar">
                <INPUT type="submit" name="b1" value="Enviar">
                    </P>
    
        </form> 
 
 
 </body> 
</html>