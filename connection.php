<?php

class DB
{
    protected $model = null;

    protected $hostname = '127.0.0.1';

    protected $database = "tour_management_db";

    protected $username = "root";

    protected $password = "root";

    public function __construct()
    {
        try {
            $this->model = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->database, $this->username, $this->password);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function select($sql)
    {
        $list = [];
        foreach ($this->model->query($sql) as $row)
            array_push($list, $row);

        return $list;
    }

    public function execute($sql)
    {
        return $this->model->exec($sql);
    }

    public function find($sql)
    {
        $res = $this->select($sql);

        return empty($res) ? [] : $res[0];
    }
}