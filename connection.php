<?php 
class Connection {
    protected $host = "localhost";
    protected $dbname = "billing";
    protected $user = "root";
    protected $pass = "";
    protected $DBH;
    function __construct() {
        try {

            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
			
			$STH = $this->DBH->prepare("CREATE TABLE IF NOT EXISTS `invoice` (
								  `id` int(11) NOT NULL,
								  `type` varchar(11) NOT NULL,
								  `notes` text NOT NULL,
								  `date` varchar(11) NOT NULL,
								  `duedate` varchar(11) NOT NULL,
								  `number` int(11) NOT NULL,
								  `status` int(11) NOT NULL,
								  `subtotal` double NOT NULL,
								  `discount` double NOT NULL,
								  `shipping` varchar(100) NOT NULL,
								  `gst` double(25,0) NOT NULL,
								  `total` double NOT NULL
								) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
			$STH->execute();
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    public function closeConnection() {

        $this->DBH = null;
    }
	
}