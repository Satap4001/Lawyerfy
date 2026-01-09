<?php 

    function connectDatabase (){

        $dbname = "lawyerfy_bd";
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);

        return $pdo;
    }

    function getAllEspecialidades (){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT * FROM especialidad");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    function getEspecialidadById($id){
        $pdo = connectDatabase();
        $stmt= $pdo->prepare("SELECT * FROM especialidad where id like :id");
        $resultado = $stmt->execute(["id" => $id]);
        return $resultado;
    }

    function getHistoricoByUserId($id){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT * FROM historico where cliente_id like :id");
        $resultado = $stmt->execute(["id" => $id]);
        return $resultado;
    }

    function getAbogadoByEspecialidadId($id){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT * FROM abogado where id_especialidad like :id");
        $resultado = $stmt->execute(["id" => $id]);
        return $resultado;
    }

    function newAbogado($newAboName, $newAboSurname, $newAboEmail , $newAboPass, $newAboNac, $newAboTel, $newAboGen, $newAboLocal){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("INSERT INTO abogado (nombre, apellido, email, contrasena, nacionalidad, telefono, genero, localidad) VALUES (:nombre , :apellido , :email , :contrasena , :nacionalidad, :telefono, :genero, :localidad) ");
        $stmt->execute([":nombre" => $newAboName, ":apellido" => $newAboSurname, ":email" => $newAboEmail , ":contrasena" => $newAboPass, ":nacionalidad" => $newAboNac, ":telefono" => $newAboTel, ":genero" => $newAboGen, ":localidad" => $newAboLocal ]);
    }

    function newCliente($newCliName, $newCliSurname, $newCliEmail , $newCliPass, $newCliTel, $newCliGen, $newCliLocal){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("INSERT INTO cliente (nombre, apellido, email, contrasena, telefono, genero, localidad) VALUES (:nombre , :apellido , :email , :contrasena, :telefono, :genero, :localidad) ");
        $stmt->execute([":nombre" => $newCliName, ":apellido" => $newCliSurname, ":email" => $newCliEmail , ":contrasena" => $newCliPass, ":telefono" => $newCliTel, ":genero" => $newCliGen, ":localidad" => $newCliLocal ]);
    }

    function checkLogIn($email, $userPass){
        $pdo = connectDatabase();
        
        $stmt = $pdo->prepare("SELECT * FROM abogado WHERE email = :email AND contrasena = :contrasena");
        $stmt->execute(["email" => $email , "contrasena" => $userPass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($usuario){
            return $usuario;
        }
        
        $stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :email AND contrasena = :contrasena");
        $stmt->execute(["email" => $email , "contrasena" => $userPass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($usuario){
            return $usuario;
        }
        
        return null;
    }



?>