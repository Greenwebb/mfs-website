<?php
class Records {	
   
	private $recordsTable = 'clients';
	public $id;
    public $fname;
    public $email;
    public $address;
	public $phone;
	public $lname;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR fname LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR phone LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR address LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR email LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		$counter =1;
		while ($record = $result->fetch_assoc()) { 				
			$rows = array();			
			$rows[] = $counter;
			$rows[] = ucfirst($record['fname']);
			$rows[] = $record['lname'];		
			$rows[] = $record['email'];	
			$rows[] = $record['address'];
			$rows[] = $record['phone'];					
			$rows[] = '<button type="button" fname="update" id="'.$record["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$rows[] = '<button type="button" fname="delete" id="'.$record["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$records[] = $rows;

			$counter ++;
		}
		
		$output = array(
			"draw"	=>	intval($_POST["draw"]),			
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$records
		);
		
		echo json_encode($output);
	}
	
	public function getRecord(){
		if($this->id) {
			$sqlQuery = "
				SELECT * FROM ".$this->recordsTable." 
				WHERE id = ?";			
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);	
			$stmt->execute();
			$result = $stmt->get_result();
			$record = $result->fetch_assoc();
			echo json_encode($record);
		}
	}
	public function updateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
			UPDATE ".$this->recordsTable." 
			SET fname= ?, lname = ?, email = ?, address = ?, phone = ?
			WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->fname = htmlspecialchars(strip_tags($this->fname));
			$this->lname = htmlspecialchars(strip_tags($this->lname));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->phone = htmlspecialchars(strip_tags($this->phone));
			
			
			$stmt->bind_param("ssssii", $this->fname, $this->lname, $this->email, $this->address, $this->phone, $this->id);
			
			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function addRecord(){
		
		if($this->fname) {

			$stmt = $this->conn->prepare("
			INSERT INTO ".$this->recordsTable."(`fname`, `lname`, `email`, `address`, `phone`)
			VALUES(?,?,?,?,?)");
		
			$this->fname = htmlspecialchars(strip_tags($this->fname));
			$this->lname = htmlspecialchars(strip_tags($this->lname));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->phone = htmlspecialchars(strip_tags($this->phone));
			
			
			$stmt->bind_param("ssssi", $this->fname, $this->lname, $this->email, $this->address, $this->phone);
			
			if($stmt->execute()){
				return true;
			}		
		}
	}
	public function deleteRecord(){
		if($this->id) {			

			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->recordsTable." 
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}
}
?>