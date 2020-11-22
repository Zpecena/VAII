<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Uzivatel;

class Checkpoint2Controller extends AControllerBase
{

    public function index()
    {
        return Uzivatel::getAll();
    }

    public function pridat(){
        if(!isset($_POST['meno'])){
            return null;
        }
        $uzivatel = new Uzivatel($_POST['meno'], $_POST['pohlavie'], $_POST['popis']);
        $uzivatel->save();
        $this->reload();

    }
    public function pozriet(){
        return Uzivatel::getOne($_GET['id']);

    }

    public function upravit(){
        if(isset($_POST['id'])){
            $uzivatel = Uzivatel::getOne($_POST['id']);
            $uzivatel->setMeno($_POST['meno']);
            $uzivatel->setPohlavie($_POST['pohlavie']);
            $uzivatel->setPopis($_POST['popis']);
            $uzivatel->save();
            $this->reload();
        }else{
            $uzivatel = Uzivatel::getOne($_GET['id']);
        }
        return $uzivatel;
    }

    public function kontrola(){

    }

    public function vymazat(){
        if(isset($_GET['id'])){
            $uzivatel = Uzivatel::getOne($_GET['id']);
            $uzivatel->delete();
        }
        $this->reload();
    }
    public function reload()
    {
        header("Location: http://localhost/chckp2/index.php?c=Checkpoint2");
        die();
    }
}