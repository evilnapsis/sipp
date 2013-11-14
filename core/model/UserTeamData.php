<?php
class UserTeamData {
	public static $tablename = "user_team";

	public function UserTeamData(){
		$this->user_id = "";
		$this->team_id = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (user_id,team_id) value (\"$this->user_id\",$this->team_id)";
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


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserTeamData();
		while($r = $query->fetch_array()){
			$data->team_id = $r['team_id'];
			$data->user_id = $r['user_id'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByUID($uid){
		$sql = "select * from ".self::$tablename." where user_id=$uid";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserTeamData();
		while($r = $query->fetch_array()){
			$data->team_id = $r['team_id'];
			$data->user_id = $r['user_id'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserTeamData();
		while($r = $query->fetch_array()){
			$data->team_id = $r['team_id'];
			$data->user_id = $r['user_id'];
			$found = $data;
			break;
		}
		return $found;
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new TeamData();
			$array[$cnt]->team_id = $r['team_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$cnt++;
		}
		return $array;
	}
	public function getUser(){
		return UserData::getById($this->user_id);
	}
	public static function getAllByTeamId($team_id){
		$sql = "select * from ".self::$tablename." where team_id=$team_id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new UserTeamData();
			$array[$cnt]->team_id = $r['team_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$cnt++;
		}
		return $array;
	}


}

?>