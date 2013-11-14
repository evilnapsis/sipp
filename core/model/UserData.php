<?php


class UserData {
	public static $tablename = "user";
	public function Userdata(){
		$this->name = "";
		$this->lastname = "";
		$this->plate = "";
		$this->nick = "";
		$this->mail = "";
		$this->password = "";
		$this->image = "";
		$this->status_id = 1;
		$this->usertype_id = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into user (nick,name,lastname,plate,mail,password,status_id,usertype_id,created_at) ";
		$sql .= "value (\"$this->nick\",\"$this->name\",\"$this->lastname\",\"$this->plate\",\"$this->mail\",\"$this->password\",$this->status_id,$this->usertype_id,$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nick=\"$this->nick\",name=\"$this->name\",lastname=\"$this->lastname\",plate=\"$this->plate\",mail=\"$this->mail\",image=\"$this->image\",password=\"$this->password\",status_id=".$this->status->id.",usertype_id=".$this->usertype->id.",is_admin=$this->is_admin,is_verified=$this->is_verified,created_at=$this->created_at where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->nick = $r['nick'];
			$data->name = $r['name'];
			$data->lastname = $r['lastname'];
			$data->plate = $r['plate'];
			$data->mail = $r['mail'];
			$data->image = $r['image'];
			$data->password = $r['password'];
			$data->usertype_id = $r['usertype_id'];
			$data->status = StatusData::getById($r['status_id']);
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByMail($mail){
		echo $sql = "select * from ".self::$tablename." where mail=\"$mail\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->nick = $r['nick'];
			$data->name = $r['name'];
			$data->mail = $r['mail'];
			$data->image = $r['image'];
			$data->password = $r['password'];
			$data->usertype = UserTypedata::getById($r['usertype_id']);
			$data->status = StatusData::getById($r['status_id']);
			$data->is_admin = $r['is_admin'];
			$data->is_verified = $r['is_verified'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->nick = $r['nick'];
			$data->name = $r['name'];
			$data->mail = $r['mail'];
			$data->image = $r['image'];
			$data->password = $r['password'];
			$data->usertype = UserTypedata::getById($r['usertype_id']);
			$data->status = StatusData::getById($r['status_id']);
			$data->is_admin = $r['is_admin'];
			$data->is_verified = $r['is_verified'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nick = $r['nick'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->mail = $r['mail'];
			$array[$cnt]->plate = $r['plate'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->usertype_id = UserTypeData::getById($r['usertype_id']);
			$array[$cnt]->status_id = StatusData::getById($r['status_id']);
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAlumns(){
		$sql = "select * from ".self::$tablename." where usertype_id=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nick = $r['nick'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->mail = $r['mail'];
			$array[$cnt]->plate = $r['plate'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->usertype_id = UserTypeData::getById($r['usertype_id']);
			$array[$cnt]->status_id = StatusData::getById($r['status_id']);
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getTeachers(){
		$sql = "select * from ".self::$tablename." where usertype_id=2 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nick = $r['nick'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->mail = $r['mail'];
			$array[$cnt]->plate = $r['plate'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->usertype_id = UserTypeData::getById($r['usertype_id']);
			$array[$cnt]->status_id = StatusData::getById($r['status_id']);
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}
	public static function getAdmins(){
		$sql = "select * from ".self::$tablename." where usertype_id=3 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nick = $r['nick'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->mail = $r['mail'];
			$array[$cnt]->plate = $r['plate'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->usertype_id = UserTypeData::getById($r['usertype_id']);
			$array[$cnt]->status_id = StatusData::getById($r['status_id']);
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}



}

?>