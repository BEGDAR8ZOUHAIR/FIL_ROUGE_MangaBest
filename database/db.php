<?php


class db {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost","root","","mangabest");
        if ($this->conn->connect_errno){
            die('database connection error' . $this->conn->connect_error);
        }
    }

    public function dd($value){ 
    echo '<pre>';
    var_dump($value,true);
    echo '</pre>';
    die;
    }
        // select All
    public function selectAll($table , $conditions=[])
    {
    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        return  $result->fetch_all(MYSQLI_ASSOC);
    }else {

            $i=0;
    
        foreach($conditions as $key => $value){
            if ($i == 0){
                $sql .= " WHERE $key = ?";

            }else
            {
                $sql .= " AND $key = ?";
            }
            $i++;
    
     }
     $stm = $this->conn->prepare($sql);
     $values = array_values($conditions);
    $types = str_repeat('s',count($conditions));
    $stm->bind_param($types , ...$values);
    $stm->execute();
    $result = $stm->get_result();
    return  $result->fetch_all(MYSQLI_ASSOC);

    }
}

//   select the last id of the chapter=========================================


public function selectLastChapter($table , $conditions=[])
{
    $sql = "SELECT MAX(id) as max FROM $table";
    if(empty($conditions)){
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        return  $result->fetch_all(MYSQLI_ASSOC);
    }else {

            $i=0;
        
        foreach($conditions as $key => $value){
            if ($i == 0){
                $sql .= " WHERE $key = ?";

            }else
            {
                $sql .= " AND $key = ?";
            }
            $i++;
    
     }
     $stm = $this->conn->prepare($sql);
     $values = array_values($conditions);
    $types = str_repeat('s',count($conditions));
    $stm->bind_param($types , ...$values);
    $stm->execute();
    $result = $stm->get_result();
    return  $result->fetch_all(MYSQLI_ASSOC);
}
}


public function selectOne($table , $conditions=[])
{
    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        return  $result->fetch_all(MYSQLI_ASSOC);
       
    }else {


            $i=0;
        //   $sql = "SELECT * FROM $table WHERE username = 'zouahrir' AND admin = 1";
        foreach($conditions as $key => $value){
            if ($i == 0){
                $sql .= " WHERE $key = ?";

            }else
            {
                $sql .= " AND $key = ?";
            }
            $i++;
    
     }

      $sql .= " LIMIT 1";

      $stm = $this->conn->prepare($sql);
      $values = array_values($conditions);
     $types = str_repeat('s',count($conditions));
     $stm->bind_param($types , ...$values);
     $stm->execute();
     $result = $stm->get_result();
     return  $result->fetch_all(MYSQLI_ASSOC);
     

    }
}

public function insert($table,$tableCln,$tableVal)
	{
		$names="";
		$values="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`";
			$values.=$vrls."'".$tableVal[$i]."'";
		}
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
	}

    // delete =====================================

    public function delete($table , $column , $conditions)
    {
        $sql = "DELETE FROM $table where $column like $conditions";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
    }
    // update =====================================
    public function updateManga($table , $column  , $newValue , $conditions)
    {
		for ($i=0; $i <count($newValue) ; $i++) 
		{ 
            echo $table."__".$column[$i]."__".$newValue[$i]."__".count($newValue)."<br>";
            $sql = "UPDATE $table SET `$column[$i]` = '$newValue[$i]' WHERE id like'$conditions'";
            $query=$this->conn->prepare($sql);
		    $query->execute();
		}
    }
}