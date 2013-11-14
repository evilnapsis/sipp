<?php

/*
* 1 de agosto del 2013
* Recupera los datos mas relevantes del usuario de la base de datos.
*
class UserData {
	public $name="";
	public $phone="";
	public $photo="";
	public function UserData($uid){
		$id = $uid;
//		$sql = 'select * from user left join profile on (user.id=profile.user_id) left join socialurl on (user.id=socialurl.user_id) left join jobprofile on (user.id=jobprofile.user_id)  where id='.$id.' limit 1';
		$sql = 'select * from user where id='.$id.' limit 1';

		$db = new Database();
		$con = $db->connect();
		$query = $con->query($sql);
		$this->id = "";

		$this->name = "";
		$this->phone = "";
		$this->mail = "";

		while($r= $query->fetch_array()){
		  $this->id = $r['id'];
		  $this->name = $r['name'];
		  $this->mail = $r['mail'];
		}
	}
}
*/

?>