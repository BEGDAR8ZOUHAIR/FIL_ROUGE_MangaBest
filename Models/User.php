<?php

require './database/db.php';

class User extends db
{

    // private $username;
    // private $password;

    function __construct()
    {
        parent::__construct();
        // $this->username = $username;
        // $this->password = $password;
    }

    public function select()
    {
        return $this->selectOne("users");
    }

    public function insertUser()
    {
        $table = 'users';
        $columns = ['username', 'email', 'password', 'gender'];
        $values = [$_POST['email'], $_POST['email'], $_POST['password'], $_POST['gender']];

        $this->insert($table, $columns, $values);
    }




    public function fetch()
    {
        $data = null;

        $query = "SELECT * FROM users";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function deleteUser($id)
    {

        $query = "DELETE FROM users where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function fetch_single($id)
    {

        $data = null;

        $query = "SELECT * FROM users WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM users WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {

        $query = "UPDATE users SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function profile($id)
    {

        $data = null;

        $query = "SELECT * FROM users WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }


    public function profileInfo()
    {

        $data = array();
        if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){ 
        $query = "SELECT * FROM `users` where admin=0";
        if ($sql = $this->conn->query($query)) {
            // while ($row = $sql->fetch_assoc()) {
            //     $data += $row;
            //     $row++;
            // }
            $data = $sql->fetch_all();
        }
        return $data;
        }
        else{
        $id=$_SESSION['userId'];
        $query = "SELECT * FROM `users` where admin=0 and id='$id'";
        if ($sql = $this->conn->query($query)) {
            // while ($row = $sql->fetch_assoc()) {
            //     $data += $row;
            //     $row++;
            // }
            $data = $sql->fetch_all();
        }
        return $data;
        }
    }
}
