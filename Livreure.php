<?php
class Livreure
{
    private ?int $Idlivreure = null;
    private ?string $Adresselivreure = null;
    private ?string $Nomclient= null;
    private ?int $Couttotal = null;
    private ?DateTime $Datelivreure = null;

    public function __construct($Idlivreure  = null, $Adresselivreure, $Nomclient, $Couttotal, $Datelivreure)
    {
        $this->Idlivreure = $Idlivreure ;
        $this->Adresselivreure= $Adresselivreure;
        $this->Nomclient = $Nomclient;
        $this->Couttotal = $Couttotal;
        $this->Datelivreure = $Datelivreure;
    }

    /**
     * Get the value of Idlivreure 
     */
    public function getIdlivreure ()
    {
        return $this->Idlivreure ;
    }

    /**
     * Get the value of Adresselivreure
     */
    public function getAdresselivreure()
    {
        return $this->Adresselivreure;
    }

    /**
     * Set the value of Adresselivreure
     *
     * @return  self
     */
    public function setAdresselivreure($Adresselivreure)
    {
        $this->Adresselivreure = $Adresselivreure;

        return $this;
    }

    /**
     * Get the value of Nomclient 
     */
    public function getNomclient ()
    {
        return $this->Nomclient ;
    }

    /**
     * Set the value of Nomclient 
     *
     * @return  self
     */
    public function setNomclient ($Nomclient )
    {
        $this->Nomclient = $Nomclient ;

        return $this;
    }

    /**
     * Get the value of Couttotal 
     */
    public function getCouttotal ()
    {
        return $this->Couttotal ;
    }

    /**
     * Set the value of Couttotal 
     *
     * @return  self
     */
    public function setCouttotal ($Couttotal )
    {
        $this->Couttotal  = $Couttotal ;

        return $this;
    }

    /**
     * Get the value of Datelivreure
     */
    public function getDatelivreure()
    {
        return $this->Datelivreure;
    }

    /**
     * Set the value of Datelivreure
     *
     * @return  self
     */
    public function setDatelivreure($Datelivreure)
    {
        $this->Datelivreure = $Datelivreure;

        return $this;
    }
}
