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
        $stmt= $pdo->prepare("SELECT * FROM especialidad where id = :id");
        $stmt->execute(["id" => $id]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function getHistoricoByUserId($id){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT * FROM historico where cliente_id = :id");
        $stmt->execute(["id" => $id]);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function getAbogadoByEspecialidadId($id){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT * FROM abogado where id_especialidad = :id");
        $stmt->execute(["id" => $id]);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function newAbogado($newAboName, $newAboSurname, $newAboEmail , $newAboPass, $newAboNac,  $newAboTel, $newAboGen, $newAboLocal, $newAboEsp){
        
        $pdo = connectDatabase();
        if (emailExiste($newAboEmail)){
            return "EL EMAIL YA ESTÁ REGISTRADO";
        }
        $stmt2 = $pdo->prepare("SELECT id FROM especialidad WHERE nombre = :nombre");
        $stmt2->execute(["nombre" => $newAboEsp]);
        $resultadoEsp = $stmt2->fetch();
        $stmt = $pdo->prepare("INSERT INTO abogado (nombre, apellido, email, nacionalidad, contrasena, telefono, genero, localidad, id_especialidad) VALUES (:nombre , :apellido , :email , :nacionalidad, :contrasena , :telefono, :genero, :localidad , :id_especialidad) ");
        $stmt->execute([":nombre" => $newAboName, ":apellido" => $newAboSurname, ":email" => $newAboEmail ,  ":nacionalidad" => $newAboNac,  ":contrasena" => $newAboPass, ":telefono" => $newAboTel, ":genero" => $newAboGen, ":localidad" => $newAboLocal, ":id_especialidad" => $resultadoEsp['id'] ]);
        return "REGISTRO CORRECTO";
    }

    function newCliente($newCliName, $newCliSurname, $newCliEmail , $newCliPass, $newCliTel, $newCliGen, $newCliLocal){
        $pdo = connectDatabase();
        if (emailExiste($newCliEmail)){
            return "EL EMAIL YA ESTÁ REGISTRADO";
        }
        $stmt = $pdo->prepare("INSERT INTO cliente (nombre, apellido, email, contrasena, telefono, genero, localidad) VALUES (:nombre , :apellido , :email , :contrasena, :telefono, :genero, :localidad) ");
        $stmt->execute([":nombre" => $newCliName, ":apellido" => $newCliSurname, ":email" => $newCliEmail , ":contrasena" => $newCliPass, ":telefono" => $newCliTel, ":genero" => $newCliGen, ":localidad" => $newCliLocal ]);
        return "REGISTRO CORRECTO";
    }

    function checkLogIn($email, $userPass){
        $pdo = connectDatabase();
        
        $stmt = $pdo->prepare("SELECT * FROM abogado WHERE email = :email AND contrasena = :contrasena");
        $stmt->execute(["email" => $email , "contrasena" => $userPass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($usuario){
            $_SESSION["nombre"] = $usuario['nombre'];
            $_SESSION["apellido"] = $usuario['apellido'];
            $_SESSION["id_abogado"] = $usuario['id'];
            return $usuario;
        }
        
        $stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :email AND contrasena = :contrasena");
        $stmt->execute(["email" => $email , "contrasena" => $userPass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        //
        if($usuario){
            $_SESSION["nombre"] = $usuario['nombre'];
            $_SESSION["apellido"] = $usuario['apellido'];
            $_SESSION["id_abogado"] = $usuario['id'];
            return $usuario;
        }
        
        return null;
    }

    function emailExiste($email){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("
            SELECT email FROM cliente WHERE email = :email
            UNION
            SELECT email FROM abogado WHERE email = :email
        ");
        $stmt->execute(["email" => $email]);
        return $stmt->fetch() ? true : false;
    }

    function modificarDatos($email, $newPass, $newTel, $newLocal){
        $pdo = connectDatabase();
        
        $stmt = $pdo->prepare("SELECT id FROM cliente WHERE email = :email");
        $stmt->execute([":email" => $email]);

        if ($stmt->rowCount() > 0) {
            $update = $pdo->prepare(
                "UPDATE cliente 
                SET contrasena = :contrasena, telefono = :telefono, localidad = :localidad 
                WHERE email = :email"
            );
            $update->execute([
                ":contrasena" => $newPass,
                ":telefono"   => $newTel,
                ":localidad"  => $newLocal,
                ":email"      => $email
            ]);

            return "DATOS ACTUALIZADOS (CLIENTE)";
        }
        
        $stmt = $pdo->prepare("SELECT id FROM abogado WHERE email = :email");
        $stmt->execute([":email" => $email]);

        if ($stmt->rowCount() > 0) {
            $update = $pdo->prepare(
                "UPDATE abogado 
                SET contrasena = :contrasena, telefono = :telefono, localidad = :localidad 
                WHERE email = :email"
            );
            $update->execute([
                ":contrasena" => $newPass,
                ":telefono"   => $newTel,
                ":localidad"  => $newLocal,
                ":email"      => $email
            ]);

            return "DATOS ACTUALIZADOS (ABOGADO)";
        }

        return "EMAIL NO ENCONTRADO";
    }

    function agregarPublicacion($titulo, $contenido, $imagenNombre, $id_abogado) {
        $pdo = connectDatabase();

        try {
            // Preparar la consulta
            $sql = "INSERT INTO publicacion (titulo, descripcion, codigoImagen, id_admin, id_abogado) 
                    VALUES (:titulo, :descripcion, :codigoImagen, :id_admin, :id_abogado)";

            $stmt = $pdo->prepare($sql);

            // Ejecutar con parámetros
            $stmt->execute([
                ':titulo' => $titulo,
                ':descripcion' => $contenido,
                ':codigoImagen' => $imagenNombre,
                ':id_admin' => 1,
                ':id_abogado' => $id_abogado
            ]);

            echo "Publicación guardada correctamente";

        } catch (PDOException $e) {
            echo "Error al guardar publicación: " . $e->getMessage();
        }
    }

    function buscarPublicacion($keyword){
        $pdo = connectDatabase();
        $stmt = 
        $pdo->prepare("SELECT DISTINCT p.*, 
       CONCAT(a.nombre, ' ', a.apellido) as abogado_nombre,
       e.nombre as especialidad
        FROM publicacion p
        LEFT JOIN abogado a ON p.id_abogado = a.id
        LEFT JOIN especialidad e ON a.id_especialidad = e.id
        WHERE p.titulo LIKE ':keyword' 
        OR p.descripcion LIKE ':keyword'
        OR a.nombre LIKE ':keyword'
        OR a.apellido LIKE ':keyword'
        OR CONCAT(a.nombre, ' ', a.apellido) LIKE ':keyword'
        OR e.nombre LIKE ':keyword';");
        $stmt->execute([":keyword" => $keyword]);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function getAllPublicaciones(){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT DISTINCT p.*, 
       CONCAT(a.nombre, ' ', a.apellido) as abogado_nombre,
       e.nombre as especialidad
        FROM publicacion p
        LEFT JOIN abogado a ON p.id_abogado = a.id
        LEFT JOIN especialidad e ON a.id_especialidad = e.id;");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../frontend/index.php");
    }


    function getDatosAbo($id) {
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT 
                        a.nombre as nombre,
                        a.apellido as apellido,
                        a.nacionalidad as nacionalidad,
                        a.telefono as telefono,
                        a.genero as genero,
                        a.localidad as localidad,
                        e.nombre AS especialidad
                    FROM abogado a
                    JOIN especialidad e ON a.id_especialidad = e.id
                    WHERE a.id = :id");
        $stmt->execute(["id" => $id]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function getPublicacionesByAbogado($id_abogado){
        $pdo = connectDatabase();
        $stmt = $pdo->prepare("SELECT DISTINCT p.*, 
       CONCAT(a.nombre, ' ', a.apellido) as abogado_nombre,
       e.nombre as especialidad
        FROM publicacion p
        LEFT JOIN abogado a ON p.id_abogado = a.id
        LEFT JOIN especialidad e ON a.id_especialidad = e.id
        WHERE a.id = :id_abogado;");
        $stmt->execute([":id_abogado" => $id_abogado]);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
?>