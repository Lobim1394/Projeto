<?php
include 'conection_sql.php';


    $create_base = "CREATE DATABASE IF NOT EXISTS EVERY_CONTROL default charset = utf8 default collate utf8_general_ci;";
    $create_user = "create TABLE if not exists t_operadores(

                    id 			  int auto_increment primary key,
                    nome     	  varchar (500) not null,
                    login		  varchar (100) not null,
                    senha    	  varchar (15) not null,
                    celular  	  varchar (14),
                    email    	  varchar (100),
                    cargo	 	  varchar (100),
                    obs		 	  varchar (1000),
                    id_permissoes varchar (60),
                    inativo 	  varchar (2)
                    
                );";

    $tes = connection_sql();

	if (mysqli_query($tes, $create_base)) {
	      echo true;
	} else {
		echo 'Erro ao criar Base de Dados';		
    }

    if (mysqli_query($tes, $create_user)) {
            echo true;
    } else {
        echo 'Erro ao Criar usuários';        
    }
    if (mysqli_query($tes, $create_ativos)) {
        echo true;
    } else {
        echo 'Erro ao criar Tabela Ativos';        
    }

	mysqli_close($tes);

    grava_sql("administrador","admin","admin","admin@webmaster.com","+5583986444932","administrador","");
        
   

// grava estes dados no banco 
function grava_sql($name,$user,$pass,$email,$celular,$cargo,$obs){
    $tes = connection_sql();
	$sql= "INSERT INTO t_operadores (nome,login,senha,celular,email,cargo,obs) VALUES ("."'". $name ."'".","."'".$user."'".","."'".$pass."'".","."'".$celular."'".","."'".$email."'".","."'".$cargo."'".","."'".$obs."'".");";
	if (mysqli_query($tes, $sql)) {
	      echo true;
	} else {
		echo 'Erro ao salvar sua mensagem';
	}
	mysqli_close($tes);
}


?>


