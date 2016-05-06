<?php
  header('Content-Type: application/json');
  // Check for empty fields
  if(empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $response = array('success' => false, 'message' => "Erro no envio da mensagem!");
    echo json_encode($response);
    return false;
  }

  $name = strip_tags(htmlspecialchars($_POST['name']));
  $email = strip_tags(htmlspecialchars($_POST['email']));
  $subject = strip_tags(htmlspecialchars($_POST['assunto']));
  $message = strip_tags(htmlspecialchars($_POST['message']));

  $wsContato = "http://contato.paulovelho.com.br/server.php";
  $source = 0;
  $secret = "secret-key";

  $data = @$_POST;
  if(!empty($data)){

    $email_message = "FROM: [".$name." &lt;".$email."&gt;] :  \n\n".$message;
    $postData = array(
      'source' => $source,
      'to' => 'lavajato@paulovelho.com',
      'replyto' => "'".$name."' <".$email.">",
      'subject' => $subject,
      'message' => $email_message,
      'priority' => 70,
      'auth' => $secret 
    );
    $options = array(
      'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($postData),
      ),
    );
    $context  = stream_context_create($options);
    $wsContato = $wsContato."/server.php?addMail";
    $result = file_get_contents($wsContato, false, $context);
    // p_r($result);

    $response = array('success' => true, 'message' => "Delação premiada arquivada com sucesso!");
    echo json_encode($response);
  } else {
    $response = array('success' => false, 'message' => "Epa! Deu merda no envio da mensagem! A Polícia Federal já deve estar cuidando do assunto...");
    echo json_encode($response);
  }
  return true;
?>
