<?php

class Core_Model_DB_Adapter{


    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "db" => "ccc_project"
    ];
    public $connect = null;


    public function connect() {

        if(is_null($this->connect)){

            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["db"]
            );
        }
        return $this;

        // if (!$this->connect) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }
    }

    public function fetchAll($query) {
        
    }

    public function fetchPairs($query) {
        
    }

    public function fetchOne($query) {
        
    }

    public function fetchRow($query) {
        $row = [];
        $this->connect();
        $sql = mysqli_query($this->connect,$query);
        while($_row = mysqli_fetch_assoc($sql))
        {
            $row=$_row;
        }
        return $row;
    }

    public function insert($query) {
        $this->connect();
        $sql = mysqli_query($this->connect,$query);
        if ($sql) {
            echo "Data Update Succsessfully!";
            return mysqli_insert_id($this->connect);
        } else {
            return FALSE;
        }
    }

    public function update($query) {
       
    }

    public function delete($query) {
        
    }

    public function query($query) {
       
    }


    // --------------------------------------------

    public function fetch_allData($result){
        $this->connect();
        $sql = mysqli_query($this->connect,$result);
        $column = $rows = [];
        
        $columnFields = $sql->fetch_fields();

        foreach ($columnFields as $fields) {
            $this->column[] = $fields->name;
        }

        while ($row = $sql->fetch_assoc()) {
            $this->rows[] = $row;
        }

 
        $this->table($this->column,$this->rows);
    }

    public function table($column,$rows){
        echo "<table border=1>";
        echo "<tr>";
        foreach ($column as $col) {
            echo "<th>".$col."</th>";
        }
        echo "</tr>";
        foreach ($rows as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td>".$val."</td>";
            }
            echo "</tr>";
        }
    
        echo "</table>";
    }
}