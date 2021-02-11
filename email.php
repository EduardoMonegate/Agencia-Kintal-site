<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);

$email = addslashes($_POST['email']);

$mensagem = addslashes($_POST['mensagem']);


$to= "diego@agenciakintal.com.br";
$subjet= "Contato - site Kintal";
$body= "Nome: ".$nome. "\n".
       "E-mail : ".$email. "\n".
       "Mensagem : ".$mensagem. "\n";

$header= "From:contato@agenciakintal.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();
 
if(mail($to,$subjet,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Falha ao envio do Email");
}


}else{
    echo("coloque um email!");
}



?>