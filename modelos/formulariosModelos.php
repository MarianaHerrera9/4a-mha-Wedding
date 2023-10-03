<?php
require_once "conexion.php";

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) values 
        (:nombre, :email, :password)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()){
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

        if ($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare("select*, DATE_FORMAT(fecha, '%d/%m/%Y' ) as f from $tabla order by id desc");
            $stmt -> execute();
            return $stmt->fetchAll();
            
        }else{
            $stmt = Conexion::conectar()->prepare("select*, DATE_FORMAT(fecha, '%d/%m/%Y' ) as f from $tabla 
            where $item = :$item order by id desc");
            $stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }
        $stmt = null;
    }
    static public function mdlActualizarRegistro($tabla, $datos){
        $stm = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, 
        email=:email, password=:password WHERE id=:id");
    
        $stm->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stm->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stm->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stm->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    
        if ($stm->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stm = null;
    }

    static public function mdlEliminarRegistro($tabla, $valor){
        $stm = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
    
        $stm->bindParam(":id", $valor, PDO::PARAM_INT);
    
        if ($stm->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stm = null;
    }
}
?>