<?php 
	require_once "Conexion.php";
	class Venta extends Conexion
	{
    public $id;
    public $fecha_compra;
    public $estado;
    public $fecha_entrega;
    public $fecha_envio;
    public $precio_venta;
    public $costo_envio;
    public $direccion_entrega;
    public $observaciones;
    public $producto_id ;
    public $venta_id ;

    public function save()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("INSERT INTO detalle_ventas VALUES(null, ? ,? ,?, ?, ? , ? ,? ,? ,? ,?)");
        $consulta->bindParam(1, $this->fecha_compra);
        $consulta->bindParam(2, $this->estado);
        $consulta->bindParam(3, $this->fecha_entrega);
        $consulta->bindParam(4, $this->fecha_envio);
        $consulta->bindParam(5, $this->precio_venta);
        $consulta->bindParam(6, $this->costo_envio);
        $consulta->bindParam(7, $this->direccion_entrega);
        $consulta->bindParam(8, $this->observaciones);
        $consulta->bindParam(9, $this->producto_id);
        $consulta->bindParam(10, $this->venta_id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function all()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM detalle_ventas");
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $venta = $consulta->fetchAll();
        $this->cerrar();
        return  $venta;
    }

    public function find($id)
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM detalle_ventas WHERE id = ?");
        $consulta->bindParam(1, $id);
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $venta = $consulta->fetchAll();
        $this->cerrar();
        return  $venta[0];
    }

    public function update()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("UPDATE detalle_ventas SET fecha_compra=?, estado=?, fecha_entrega=?, fecha_envio=?, precio_venta=?, costo_envio=?, direccion_entrega=?, observaciones=?, producto_id=?, venta_id=? WHERE id = ?");
        $consulta->bindParam(1, $this->fecha_compra);
        $consulta->bindParam(2, $this->estado);
        $consulta->bindParam(3, $this->fecha_entrega);
        $consulta->bindParam(4, $this->fecha_envio);
        $consulta->bindParam(5, $this->precio_venta);
        $consulta->bindParam(2, $this->costo_envio);
        $consulta->bindParam(3, $this->direccion_entrega);
        $consulta->bindParam(3, $this->observaciones);
        $consulta->bindParam(4, $this->producto_id);
        $consulta->bindParam(5, $this->venta_id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function delete()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("DELETE FROM detalle_ventas where id=?");
        $consulta->bindParam(1, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }
/*
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
    */
    
}