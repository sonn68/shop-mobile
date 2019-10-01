<?php 
	class model{
		public $model;
		public function get_all($sql){
			global $db;
			$arr=array();
			$result=mysqli_query($db,$sql);
			while ($rows=mysqli_fetch_object($result)) 
				$arr[]=$rows;
			return $arr;
		}
		public function get_a_record($sql){
			global $db;
			$result=mysqli_query($db,$sql);
			$arr=mysqli_fetch_object($result);
			return $arr; 

		}
		public function get_num_rows($sql){
			global $db;
			$result=mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
		public function execute($sql){
			global $db;
			$result=mysqli_query($db,$sql);
		}
	}
 ?>