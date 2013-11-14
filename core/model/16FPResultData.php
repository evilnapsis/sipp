<?php

class X16FPResultData {
	public static $tablename = "16fpquestion";

	public function X16FPResultData(){
		$this->id = "";
		$this->testdo_id = "";
		$this->question_id = "";
		$this->answer_id = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (testdo_id,question_id,answer_id) value (\"$this->testdo_id\",$this->question_id,$this->answer_id)";
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
		$data = new X16FPResultData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->testdo_id = $r['testdo_id'];
			$data->question_id = $r['question_id'];
			$data->answer_id = $r['answer_id'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new X16FPResultData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->testdo_id = $r['testdo_id'];
			$data->question_id = $r['question_id'];
			$data->answer_id = $r['answer_id'];
			$found = $data;
			break;
		}
		return $found;
	}

}

?>