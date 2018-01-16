<?php

namespace components;

class DbComponent implements ComponentInterface
{

    protected const USERNAME = 'root';
    protected const PASSWORD = 'root';
    protected const HOST = 'localhost';
    protected const DATABASE = 'OnlineStore';

    protected $db;

    public function __construct()
    {

    }

    public function __destruct()
    {
        mysqli_close($this->db);
        $this->db = NULL;
    }

    public function execute(string $sql): array
    {
        //Делайте запрос к БД
        $result = mysqli_query($this->db, $sql);
        $array_result = array();
        while($row = mysqli_fetch_assoc($result))
            $array_result[] = $row;
        return $array_result;
    }

    public function init()
    {
        if (!$this->db) {
            $this->db = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);
        }
    }
}