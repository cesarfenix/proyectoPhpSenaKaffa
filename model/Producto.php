<?php 
	require_once "Conexion.php";
	class Producto extends Conexion
	{
    public $id;
    public $codigo;
    public $nombre;
    public $descripcion;
    public $precio;
    public $tiendaId;

    public function save()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("INSERT INTO productos VALUES(null,? ,? ,?,?,?)");
        $consulta->bindParam(1, $this->codigo);
        $consulta->bindParam(2, $this->nombre);
        $consulta->bindParam(3, $this->descripcion);
        $consulta->bindParam(4, $this->precio);
        $consulta->bindParam(5, $this->tiendaId);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function all()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM productos");
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $productos = $consulta->fetchAll();
        $this->cerrar();
        return  $productos;
    }

    public function find($id)
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM productos WHERE id = ?");
        $consulta->bindParam(1, $id);
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $productos = $consulta->fetchAll();
        $this->cerrar();
        return  $productos[0];
    }

    public function update()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("UPDATE productos SET codigo=?, nombre=?, descripcion=?, precio=? WHERE id = ?");
        $consulta->bindParam(1, $this->codigo);
        $consulta->bindParam(2, $this->nombre);
        $consulta->bindParam(3, $this->descripcion);
        $consulta->bindParam(4, $this->precio);
        $consulta->bindParam(5, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function delete()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("DELETE FROM productos where id=?");
        $consulta->bindParam(1, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function validarNombre()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM productos WHERE UPPER(nombre)=UPPER(?)");
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