<?php
namespace App\Models;
use App\Core\Model;

class Uzivatel extends Model
{
    protected $id;
    protected $meno;
    protected $pohlavie;
    protected $popis;
    public function __construct($meno = "", $pohlavie = "", $popis = "")
    {
        $this->pohlavie = $pohlavie;
        $this->meno = $meno;
        $this->popis = $popis;
    }

    static public function setDbColumns()
    {
        return ['id', 'meno', 'pohlavie', 'popis'];
    }

    static public function setTableName()
    {
        return "uzivatel";
    }

    /**
     * @return mixed
     */
    public function getPopis()
    {
        return $this->popis;
    }

    /**
     * @return mixed
     */
    public function getPohlavie()
    {
        return $this->pohlavie;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|string $pohlavie
     */
    public function setPohlavie($pohlavie)
    {
        $this->pohlavie = $pohlavie;
    }

    /**
     * @param mixed|string $meno
     */
    public function setMeno($meno)
    {
        $this->meno = $meno;
    }

    /**
     * @param mixed|string $popis
     */
    public function setPopis($popis)
    {
        $this->popis = $popis;
    }
}