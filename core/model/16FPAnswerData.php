<?php

class X16FPAnswerData {
	public static $tablename = "16fpanswer";

	public function X16FPAnswerData(){
		$this->id = "";
		$this->name = "";
		$this->val = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (name,val) value (\"$this->name\",$this->val)";
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
		$data = new X16FPAnswerData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->val = $r['val'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new X16FPAnswerData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->val = $r['val'];
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
			$array[$cnt] = new X16FPAnswerData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->val = $r['val'];
			$cnt++;
		}
		return $array;
	}


}

?>