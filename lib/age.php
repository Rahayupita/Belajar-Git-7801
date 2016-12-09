<?php
	class Age{
		private $db;
		
		public function Age(){
			$this -> db = new DBClass();
		}
		
		public function readAgeAllSiswa(){
			$query="select date_ob from siswa";
			return $this -> db -> gerRow($query);
		}
		
		public function readAgeSiswa($id){
			$query="select date_ob from siswa where id_siswa= ".$id;
			return $this -> db -> getRows($query);			
		}
		
		public function umur($date_ob){
			$tgl=explode("-",$date_ob);
			
			$tgl[0] = tahun(YYYY);
			$tgl[1] = bulan (MM);
			$tgl[2] = hari (DD);
			
			$umur = date("Y") - $tgl[0];
			
			if(($tgl[1]>date("m")) || ($tgl[1] == date("m")
				&& date("d") < $tgl[2]))
				{
					$umur-=1;
				}
				return $umur;
		}
		
	}