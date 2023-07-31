<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "mysql";
    private $dbname = "Blogs";
    private $conn;

    // Connect to the Database
    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);

            // get any error information while trying to connect
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

        return $this->conn;
    }
}
