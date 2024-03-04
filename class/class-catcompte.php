<?php 
class Catcompte
{
    private $id;
    private $desingation;
    private $supprimer;
    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
      $this->id = $value;
    }
    public function getDesingation()
    {
        return $this->getDesingation;
    }
    public function setDesingation($value)
    {
        $this->desingation = $value;
    }
    public function getSupprimer()
    {
        return $this->supprimer;
    }
    public function setSupprimer($value)
    {
        $this->supprimer = $value;
    }
    public function insert()
    {
        $con = new Database;
        $connect = $con->open();
        try
        {
            $donnes = $connect->prepare('INSERT INTO `categoriecompte`( `desingation`, `supprimer`) VALUES (??)');
            $donnes->execute([$this->desingation, $this->supprimer=0]);
            $con->close();
        }
        catch(Exception $e)
        {
          return $e;
        }
    }
    public function affichage()
    {
        $con = new Database;
        $connect = $con->open();
        try
        {

            $donnes = $connect->prepare('SELECT * FROM `categoriecompte` WHERE supprimer=?');
            $donnes->execute([$this->supprimer=0]);
            return $donnes->fetchAll();
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}
?>