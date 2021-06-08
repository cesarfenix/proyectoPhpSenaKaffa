<?php 
	require_once "Conexion.php";
	class Usuario extends Conexion
	{
		public $id;
		public $identificacion;
		public $password;
		public $nombre;
		public $apellido;
		public $rol;
		public $direccion;
		public $telefono;
		public $telefono_auxiliar;
		public $email;	
		
		
		
		public function save(){
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO usuarios VALUES (null, ?, md5(?), ?, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->identificacion);
			$consulta->bindParam(2, $this->password);
			$consulta->bindParam(3, $this->nombre);
			$consulta->bindParam(4, $this->apellido);
			$consulta->bindParam(5, $this->rol);
			$consulta->bindParam(6, $this->direccion);
			$consulta->bindParam(7, $this->telefono);
			$consulta->bindParam(8, $this->telefono_auxiliar);
			$consulta->bindParam(9, $this->email);
			$consulta->execute();

			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
		
		public function all(){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios;");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuario = $consulta->fetchAll();
			$this->cerrar();
			return $usuario;
		}
/*
	public function find($id){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM equipos WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$equipos = $consulta->fetchAll();
			$this->cerrar();
			return $equipos[0];
		}
		public function update(){
			$this->abrir();
			$consulta = $this->conexion->prepare("UPDATE equipos SET nombre=?, dt=?, municipio=? WHERE id =?");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->dt);
			$consulta->bindParam(3, $this->municipio_id);
			$consulta->bindParam(4, $this->id);
			$consulta->execute();

			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
		public function delete(){
			$this->abrir();
			$consulta = $this->conexion->prepare("DELETE FROM equipos WHERE id =?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();

			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
		public function validar_usuario(){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM login  WHERE usuario=? AND password=md5(?)");
			$consulta->bindParam(1, $this->usuario);
			$consulta->bindParam(2, $this->password);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$logins = $consulta->fetchAll();
			$this->cerrar();
			if (count($logins > 0)) {
				return $logins[0];
			}
			else{
				return null;
			}
		}
		*/
	}
		
	 ?>