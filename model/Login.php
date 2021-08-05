<?php 
	require_once "Conexion.php";
	class Login extends Conexion
	{
		public $email;
		public $password;
		
		public function save(){
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO usuarios VALUES (null, ?, md5(?))");
			$consulta->bindParam(1, $this->email);
			$consulta->bindParam(2, $this->password);
			$consulta->execute();

			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
		public function all(){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT equipos.*, municipios.nombre AS n_municipio FROM equipos INNER JOIN municipios ON equipos.municipio=municipios.id");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$equipos = $consulta->fetchAll();
			$this->cerrar();
			return $equipos;
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
		*/
		public function validar_usuario(){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios  WHERE email=? AND password=md5(?)");
			$consulta->bindParam(1, $this->email);
			$consulta->bindParam(2, $this->password);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
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
		
	 ?>