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

        $resultado =  $stmt->execute();

        return $resultado;
    }

    function getEspecialidadById($id){
        $pdo = connectDatabase();

        $stmt= $pdo->prepare("SELECT * FROM especialidad where id like :id");

        $resultado = $stmt->execute(["id" => $id]);

        return $resultado;
    }

?>