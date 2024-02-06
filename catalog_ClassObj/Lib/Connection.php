<?php


class Lib_Connection{

    protected $_conn = null;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        try {
            $this->_conn = mysqli_connect("localhost","root","","ccc_practice");
            // echo "Connection done";
        } catch (Exception $e) {
            echo $e->getMassage();
            echo "Please Check Your code Is there any Error in Connection";
        }
        return $this->_conn;
    }

    public function exec($sql){
        try {
            $test = $this->connect()->query($sql);
        } catch (Exception $e) {
            echo $e->getMassage();
        }
        return $test;
    }

    public function fetchAllData($data){

        $rows = [];
        while ($row = $data->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;        
    }
}