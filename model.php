<?php 
class Model extends Connection {
	private $myFields=array("type","notes","date","duedate","number","status","subtotal","discount","shipping","gst","total");
    
	public function insert() {

        $STH = $this->DBH->prepare("INSERT INTO  invoice (name) VALUES ('Yeaaap')");
        $STH->execute();
    }

	function addNewInvoice($tblname,$meminfo)
	{
		$tblname = 'invoice';
		$count = sizeof($meminfo);
		if($count>0)
		{
			$id=0;
			$field="";
			$vals="";
			foreach($this->myFields as $key)
			{
				if($field=="")
				{
					$field="`".$key."`";
					$vals="'".$meminfo[$key]."'";
				}
				else
				{
					$field=$field.",`".$key."`";
					$vals=$vals.",'".$meminfo[$key]."'";
				}
			}
			// PROFILE PICTURE
			//$field=$field.",`image`";
			//$vals=$vals.",'".$profile_picture."'";

   		    $sSQL = "INSERT INTO ".$tblname." ($field) values ($vals)";
			$STH = $this->DBH->prepare($sSQL);
			$STH->execute();
			return 1;
		}
		else
		{
			return false;
		}
	}
}