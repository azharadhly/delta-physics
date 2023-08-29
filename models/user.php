<?php

require_once 'base/BaseModel.php';

class user extends BaseModel
{
    public $name;
    public $id;
    public $username;
    public $email;
    public $created_at;
    public $updated_at;
    public $password;
    public $books;

    protected function getTableName()
    {
        return "users";
    }

    public function getAllActive()
    {
        return $this->pm->run("SELECT * FROM users where active = 1");
    }
    
    public function getAll()
    {
        return $this->pm->run("SELECT * FROM " . $this->getTableName(). " order by id desc");
    }

    protected function addNewRec()
    {
        $this->lm->log("saving users : ". $this->name);
        //
        $param = array(':name' => $this->name,);
        return $this->pm->run("INSERT INTO users(name, active) values(:name, :active)", $param);
    }

    protected function updateRec()
    {
        $this->lm->log("updating users : ". $this->name);
        //
        $param = array(':name' => $this->name,  ':id' => $this->id);
        return $this->pm->run("UPDATE users SET name = :name, WHERE id = :id", $param);
    }
}
