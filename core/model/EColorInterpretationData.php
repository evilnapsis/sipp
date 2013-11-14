<?php


class EColorInterpretationData {
	public static $tablename = "e_color_interpretation";
	public function EColorInterpretationData(){
		$this->id = "";
		$this->color_ic = "";
		$this->one_two = "";
		$this->three_four = "";
		$this->five_six = "";
		$this->seven_eigth = "";
	}

public function getColor(){
	return ColorData::getById($this->user_id);
}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EColorInterpretationData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->color_id = $r['color_id'];
			$data->one_two = $r['one_two'];
			$data->three_four = $r['three_four'];
			$data->five_six = $r['five_six'];
			$data->seven_eigth = $r['seven_eigth'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EColorInterpretationData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->color = $r['color'];
			$data->name = $r['name'];
			$data->one_two = $r['one_two'];
			$data->three_four = $r['three_four'];
			$data->area = AreaData::getById($r['five_six']);
			$data->five_six = $data->area->id;
			$data->seven_eigth = $data->jobtype->id;
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
			$array[$cnt] = new EColorInterpretationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->color = $r['color'];
			$array[$cnt]->one_two = $r['one_two'];
			$array[$cnt]->three_four = $r['three_four'];
			$array[$cnt]->five_six = $array[$cnt]->area->id;
			$array[$cnt]->seven_eigth = $array[$cnt]->jobtype->id;
			$cnt++;
		}
		return $array;
	}

	public static function getByColorId($color_id){
		$sql = "select * from ".self::$tablename." where color_id=$color_id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query->fetch_array()){
			$array[$cnt] = new EColorInterpretationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->one_two = $r['one_two'];
			$array[$cnt]->three_four = $r['three_four'];
			$array[$cnt]->five_six = $r['five_six'];
			$array[$cnt]->seven_eigth = $r['seven_eigth'];
			$cnt++;
		}
		return $array;
	}
}

?>