<?php

class User{
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "cloudy_silver";
    private $userTbl    = "users";

    public function __construct(){
        if(!isset($this->db)){
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    public function __destruct(){
        if(isset($this->db)){
            $this->db->close();
        }
    }
    
    public function getRows($conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$this->userTbl;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $key = $this->db->real_escape_string($key);
                $value = $this->db->real_escape_string($value);
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$conditions)){
            $allowed_columns = ['id', 'username', 'email', 'created', 'modified'];
            $order_column = $conditions['order_by'];
            if(in_array($order_column, $allowed_columns)){
                $sql .= ' ORDER BY '.$order_column;
            }
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $start = intval($conditions['start']);
            $limit = intval($conditions['limit']);
            $sql .= ' LIMIT '.$start.','.$limit;
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $limit = intval($conditions['limit']);
            $sql .= ' LIMIT '.$limit;
        }
        
        $result = $this->db->query($sql);
        
        if($result === false){
            error_log("Database query failed: " . $this->db->error);
            return false;
        }
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $result->num_rows;
                    break;
                case 'single':
                    $data = $result->fetch_assoc();
                    break;
                default:
                    $data = '';
            }
        }else{
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }
        }
        return !empty($data)?$data:false;
    }
    public function insert($data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;
            if(!array_key_exists('created',$data)){
                $data['created'] = date("Y-m-d H:i:s");
            }
            if(!array_key_exists('modified',$data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $key = $this->db->real_escape_string($key);
                $val = $this->db->real_escape_string($val);
                $columns .= $pre.$key;
                $values  .= $pre."'".$val."'";
                $i++;
            }
            $query = "INSERT INTO ".$this->userTbl." (".$columns.") VALUES (".$values.")";
            $insert = $this->db->query($query);
            if($insert === false){
                error_log("Database insert failed: " . $this->db->error);
                return false;
            }
            return $insert?$this->db->insert_id:false;
        }else{
            return false;
        }
    }
}