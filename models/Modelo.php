<?php
 abstract class Modelo{
    private $db;
    private $productos;

    public function __construct(){

        //llamamos la conexion
        $this->db=Conectar::conexion();
        $this->productos=array();

    }

    //métodos generales
    protected function get($query){
        try{    
            unset($this->productos);
            //abrimos conexión
            $this->db=Conectar::conexion();
            $st=$this->db->prepare($query);
            $st->execute();
            $resultado = $st->get_result();

            while($row = $resultado->fetch_assoc()){
            $this->productos[] = $row;
            }
            return $this->productos;
        }catch(Exception $e){
            //cerramos conexión
            $this->db=Conectar::conexion()->close();
            return 0;

        }   
    }

    protected function getOne($query,$id){
        try{
            //abrimos conexión
            $this->db=Conectar::conexion();
            $sql=$this->db->prepare($query);
            $sql->bind_param('s', $id);
            $sql->execute();
            $resultado = $sql->get_result();
            $row = $resultado->fetch_assoc();
        
            return $row;
        }catch(Exception $e){
            //cerramos conexión
            $this->db=Conectar::conexion()->close();
            return 0;

        }
    }

    
 }