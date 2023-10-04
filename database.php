<?php

//creating the class Database to initiate the database connection
  
  class Database{
    
    private $connection;

    //calling the method connection_db()
    function __construct()
      {
        $this->connect_db();
      }
   
    //this method establishes the connection with the database using mysqli_connect function
    //if the connection fails it display an error message

    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'db');
     
      if(mysqli_connect_error()){
       die("Database Connection Failed" . mysqli_connect_error());
      }
    }

//fetching data from the database
    public function getData($query){
      $result = $this->connection->query($query);
      if ($result == false){
        return false;
      }
      $rows = array();
      while ($row = $result->fetch_assoc()){
        $rows[] = $row;
      }
      return $rows;
    }

//method to allow execute of sql queries
    public function execute($query){
      $result = $this->connection->query($query);    

      if ($result == false){
        echo 'Error: cannot execute the command';
        return false;
      }else{
        return true;
      }
    }
    
  }

  //creating the object database to interect with the connection
  $database = new Database();
?>
