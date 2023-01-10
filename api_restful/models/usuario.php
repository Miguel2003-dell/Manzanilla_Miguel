<?php

//CLASE QUE UTILIZARA PARA CREAR EL MODELO QUE INTERACTUA CON LA BD api_restful

class Usuario extends Conectar
{
    //funcion para traer todos los registros de la tabla categoria

    public function getUsuario()
    {

        //LLAMAR LA CADENA DE CONEXION A LA BD
        $conectar=parent::Conexion();

        $sql="select * from usuario";

        $sql=$conectar->prepare($sql);

        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

    
    public function getUsuario_id($id)
    {

      
        $conectar=parent::Conexion();
        $sql="select * from usuario where id=?";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>