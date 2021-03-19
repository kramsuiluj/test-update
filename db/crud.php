<?php 

class crud {

    private $db;

    function __construct($conn) {

        $this->db = $conn;

    }

    public function insert($tdata) {

        try {

            $sql = "INSERT INTO test (tdata) VALUES (:tdata)";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':tdata', $tdata);

            $stmt->execute();

            return true;

        } catch (PDOException $e) {

            return false;

        }

    }

    public function display() {

        try {

            $sql = "SELECT * FROM test";

            $result = $this->db->query($sql);

            return $result;

        } catch (PDOException $e) {

            return false;

        }

    }

}

?>