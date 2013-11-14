<?php

class TestDoData {
public static $tablename = "testdo";

	public function TestDoData(){
		$this->id = "";
		$this->test_id = "";
		$this->user_id = Session::getUID();
		$this->created_at = "NOW()";
	}

	public function add(){
		 $sql = "insert into ".self::$tablename." (test_id,user_id,created_at) value (\"$this->test_id\",$this->user_id,$this->created_at)";
		return Executor::doid($sql);
	}

	public function getTestData(){
		return TestData::getById($this->test_id);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doid($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	public static function getAllByUser($user_id){
		 $sql = "select * from ".self::$tablename." where user_id=$user_id order by created_at desc";
		$query = Executor::doit($sql);
		$data = null;
		$cnt=0;
		while($r = $query->fetch_array()){
			$data[$cnt] = new TestDoData();
			$data[$cnt]->id = $r['id'];
			$data[$cnt]->test_id = $r['test_id'];
			$data[$cnt]->user_id = $r['user_id'];
			$data[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $data;
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new TestDoData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->test_id = $r['test_id'];
			$data->user_id = $r['user_id'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}




}

?>