<?php

require_once 'base/BaseModel.php';

class Category1 extends BaseModel
{
    public $name;
    public $active;

    protected function getTableName()
    {
        return "category";
    }

    public function getAllActive()
    {
        return $this->pm->run("SELECT * FROM category where active = 1");
    }
    
    public function getAll()
    {
        return $this->pm->run("SELECT * FROM " . $this->getTableName(). " order by id desc");
    }

    protected function addNewRec()
    {
        $this->lm->log("saving categories : ". $this->name);
        //
        $param = array(':name' => $this->name, ':active' => $this->active ? 1 : 0);
        return $this->pm->run("INSERT INTO category(name, active) values(:name, :active)", $param);
    }

    protected function updateRec()
    {
        $this->lm->log("updating category : ". $this->name);
        //
        $param = array(':name' => $this->name,  ':active' => $this->active ? 1 : 0, ':id' => $this->id);
        return $this->pm->run("UPDATE category SET name = :name, active = :active WHERE id = :id", $param);
    }
}
