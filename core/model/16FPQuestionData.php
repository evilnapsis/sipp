<?php

class X16FPQuestionData {
	public static $tablename = "16fpquestion";

	public function X16FPQuestionData(){
		$this->id = "";
		$this->question = "";
		$this->category_id = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (question,category_id) value (\"$this->question\",$this->category_id)";
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
		$data = new X16FPQuestionData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->question = $r['question'];
			$data->category_id = $r['category_id'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new X16FPQuestionData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->question = $r['question'];
			$data->category_id = $r['category_id'];
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
			$array[$cnt] = new X16FPQuestionData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->question = $r['question'];
			$array[$cnt]->category_id = $r['category_id'];
			$cnt++;
		}
		return $array;
	}


}

?>