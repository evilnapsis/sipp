<?php


class EColorInterpretation {
	public static $tablename = "e_color_interpretation";
	public function EColorInterpretation(){
		$this->id = "";
		$this->color = "";
		$this->one_two = "";
		$this->three_four = "";
		$this->five_six = "";
		$this->seven_eight = "";
	}

public function getUser(){
	return UserData::getById($this->user_id);
}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EColorInterpretation();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->color = $r['color'];
			$data->one_two = $r['one_two'];
			$data->three_four = $r['three_four'];
			$data->area = AreaData::getById($r['five_six']);
			$data->five_six = $data->area->id;
			$data->jobtype = JobTypeData::getById($r['seven_eight']);
			$data->seven_eight = $data->jobtype->id;
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EColorInterpretation();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->color = $r['color'];
			$data->name = $r['name'];
			$data->one_two = $r['one_two'];
			$data->three_four = $r['three_four'];
			$data->area = AreaData::getById($r['five_six']);
			$data->five_six = $data->area->id;
			$data->seven_eight = $data->jobtype->id;
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
			$array[$cnt] = new EColorInterpretation();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->color = $r['color'];
			$array[$cnt]->one_two = $r['one_two'];
			$array[$cnt]->three_four = $r['three_four'];
			$array[$cnt]->five_six = $array[$cnt]->area->id;
			$array[$cnt]->seven_eight = $array[$cnt]->jobtype->id;
			$cnt++;
		}
		return $array;
	}

	public static function getAllByUID($uid){
		$sql = "select * from ".self::$tablename." where user_id=$uid";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new EColorInterpretation();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->color = $r['color'];
			$array[$cnt]->one_two = $r['one_two'];
			$array[$cnt]->three_four = $r['three_four'];
			$array[$cnt]->five_six = $array[$cnt]->area->id;
			$array[$cnt]->seven_eight = $array[$cnt]->jobtype->id;
			$cnt++;
		}
		return $array;
	}
}

?>