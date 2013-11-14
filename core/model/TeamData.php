<?php

class TeamData {
	public static $tablename = "team";

	public function TeamData(){
		$this->id = "";
		$this->name = "";
		$this->greade_id = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (name,grade_id) value (\"$this->name\",$this->grade_id)";
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
		$data = new TeamData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->grade_id = $r['grade_id'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new TeamData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->grade_id = $r['grade_id'];
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
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->grade_id = $r['grade_id'];
			
			$cnt++;
		}
		return $array;
	}

}

?>