<?php
    class CrudOpp{
        private $conn;
        public function __construct()
        {
            $this->conn = mysqli_connect('localhost','root','','opp_php');
        
        if(mysqli_connect_errno()){
            die .mysqli_connect_errno();
        }
    }
    // Access all records from database table
    public function getTableData(){
        $sql= "select * from users";
        $runQuery= mysqli_query($this->conn,$sql);
        $responseArray= array();
        while($result= mysqli_fetch_array($runQuery)){
            $responseArray[] = $result;
        }
        return $responseArray;
    }
    // Insert new record in table
    public function insertFormData($data){
        $sql="INSERT INTO `users`(`u_name`, `u_email`) VALUES ('".$data['name']."','".$data['email']."')";
        $runQuery= mysqli_query($this->conn,$sql);
        if($runQuery){
            header('Location: index.php');
        }else{
            echo "<script>alert('failed')</script>";
        }
    }
    //select record for updating
    public function getUpdateData($id){
        $sql= "select * from users Where user_id = '$id' ";
        $runQuery= mysqli_query($this->conn,$sql);
        $data= mysqli_fetch_assoc($runQuery);
        return $data;
    }
    // update record in table
    public function UpdateFormData($Formdata){
        $sql="UPDATE `users` SET `u_name`='".$Formdata['name']."',`u_email`='".$Formdata['email']."' WHERE user_id = '".$Formdata['id']."'";
        $runQuery= mysqli_query($this->conn,$sql);
        if($runQuery){
            header('Location: index.php');
        }else{
            echo "<script>alert('failed')</script>";
        }
    }
    // delete record form table
    public function DeleteUser($id){
        $sql= "delete from users Where user_id = '$id' ";
        $runQuery= mysqli_query($this->conn,$sql);
        if($runQuery){
            header('Location: index.php');
        }else{
            echo "<script>alert('failed')</script>";
        }
    }
    }
    
    $db = new CrudOpp();
   $tableList= $db->getTableData();
   // update user data
   if(isset($_POST['update'])){
    $db->UpdateFormData($_POST);
   }

   //Insert Form data into database table
   if(isset($_POST['insert'])){
    $db->insertFormData($_POST);
   }
