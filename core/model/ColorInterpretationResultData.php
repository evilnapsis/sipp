<?php


class ColorInterpretationResultData {
	public static $tablename = "color_interpretation_result";
	public function ColorInterpretationResultData(){
		$this->id = "";
		$this->testdo_id = "";
		$this->color1 = "";
		$this->color2 = "";
		$this->color3 = "";
		$this->color4 = "";
		$this->color5 = "";
		$this->color6 = "";
		$this->color7 = "";
		$this->color8 = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (testdo_id,color1,color2,color3,color4,color5,color6,color7,color8) value (\"$this->testdo_id\",$this->color1,$this->color2,$this->color3,$this->color4,$this->color5,$this->color6,$this->color7,$this->color8)";
		return Executor::doit($sql);
	}


public function getColor(){
	return ColorData::getById($this->user_id);
}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ColorInterpretationResultData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->testdo_id = $r['testdo_id'];
			$data->color1 = $r['color1'];
			$data->color2 = $r['color2'];
			$data->color3 = $r['color3'];
			$data->color4 = $r['color4'];
			$data->color5 = $r['color5'];
			$data->color6 = $r['color6'];
			$data->color7 = $r['color7'];
			$data->color8 = $r['color8'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByTestDoId($testdo_id){
		$sql = "select * from ".self::$tablename." where testdo_id=$testdo_id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ColorInterpretationResultData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->testdo_id = $r['testdo_id'];
			$data->color1 = $r['color1'];
			$data->color2 = $r['color2'];
			$data->color3 = $r['color3'];
			$data->color4 = $r['color4'];
			$data->color5 = $r['color5'];
			$data->color6 = $r['color6'];
			$data->color7 = $r['color7'];
			$data->color8 = $r['color8'];
			$found = $data;
			break;
		}
		return $found;
	}


	public static function getByName($name){
		$sql = "select * from ".self::$tablename." where name=\"$name\"";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ColorInterpretationResultData();
		while($r = $query->fetch_array()){
			$data->id = $r['id'];
			$data->testdo_id = $r['testdo_id'];
			$data->color1 = $r['color1'];
			$data->color2 = $r['color2'];
			$data->color3 = $r['color3'];
			$data->color4 = $r['color4'];
			$data->color5 = $r['color5'];
			$data->color6 = $r['color6'];
			$data->color7 = $r['color7'];
			$data->color8 = $r['color8'];
			$found = $data;
			break;
		}
		return $found;
	}

}

?>