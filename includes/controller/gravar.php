<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {

    //Cadastrar no DB
    include_once"./connection.php";
    
    $conn       = mysqli_connect($host, $user, $pass, $db_name);
    $sql        = "INSERT INTO leads(nome, email, telefone, ip, page_form, mensagem) VALUES ( ?, ?, ?, ?, ?, ? )";
    
    $loc_ip     = $_SERVER['REMOTE_ADDR'];
	$nome       = addslashes($_POST['nome']);
	$email      = addslashes($_POST['email']);
	$tel        = addslashes($_POST['telefone']);
	$msg        = addslashes($_POST['msg'])."<br><br>Telefone: ".$tel."<br>".$nome;
	$page       = "Contato";
	$data_lead  = addslashes(date('d-m-Y'));
    $ip         = addslashes($loc_ip);

    $stmt       = $conn->prepare($sql);
    $stmt->bind_param('ssssss', $nome, $email, $tel, $ip, $page, $msg);

    if($nome != '' and $email != ''){
        if($stmt->execute()){
            include_once"./enviar_mail.php";
            //echo 'registros inserido com sucesso!';
            if ($enviado) {
				//echo "E-mail enviado com sucesso!";*/
				$stmt->close();
				//echo "1";
				echo "1";
			}else {
                $stmt->close();
                //echo "0";
                echo "1";
            }
        }else{
            //echo mysqli_error($conn);
            //echo "2";
            echo "0";
        }
    }else{
        //echo "3";
        echo "2";
    }
}
