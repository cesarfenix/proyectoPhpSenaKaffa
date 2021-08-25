<?php 
	require_once "Conexion.php";
    
	class Resenia extends Conexion
	{
    public $id;
    public $calificacion;
    public $observaciones;
    public $fecha;
    public $producto_id;
    public $usuario_id;

    public function save()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("INSERT INTO reseñas_producto VALUES(null,? ,? ,?,?,?)");
        $consulta->bindParam(1, $this->calificacion);
        $consulta->bindParam(2, $this->observaciones);
        $consulta->bindParam(3, $this->fecha);
        $consulta->bindParam(4, $this->producto_id);
        $consulta->bindParam(5, $this->usuario_id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function all()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM reseñas_producto");
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $resenias = $consulta->fetchAll();
        $this->cerrar();
        return  $resenias;
    }

    public function find($id)
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM reseñas_producto WHERE id = ?");
        $consulta->bindParam(1, $id);
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $resenias = $consulta->fetchAll();
        $this->cerrar();
        return  $resenias[0];
    }

    public function update()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("UPDATE reseñas_producto SET calificacion=?, observaciones=?, fecha=?, producto_id=? , usuario_id=? WHERE id = ?");
        $consulta->bindParam(1, $this->calificacion);
        $consulta->bindParam(2, $this->observaciones);
        $consulta->bindParam(3, $this->fecha);
        $consulta->bindParam(4, $this->producto_id);
        $consulta->bindParam(5, $this->usuario_id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function delete()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("DELETE FROM reseñas_producto where id=?");
        $consulta->bindParam(1, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function validarNombre()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM reseñas_producto WHERE UPPER(nombre)=UPPER(?)");
        $consulta->bindParam(1, $this->nombre);
        $consulta->execute();
        $logins = $consulta->fetchAll();
        $this->cerrar();
        if (count($logins) > 0) {
            return $logins[0];
        } else {
            return  null;
        }
    }
    
}