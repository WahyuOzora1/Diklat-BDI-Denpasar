<?php


class Bali
{
    public $nama, $ibu_kota, $website, $gubernur, $wakil_gubernur;


    public function __construct($nama, $ibu_kota, $website, $gubernur)
    {
        $this->nama = $nama;
        $this->ibu_kota = $ibu_kota;
        $this->website = $website;
        $this->gubernur = $gubernur;
    }

    public function getNama()
    {
        return $this->nama;
    }


    public function getWebsite()
    {
        return $this->website;
    }



    public function set_ibuKota($ibuKota)
    {
        $this->ibu_kota = $ibuKota;
    }
    public function get_ibuKota()
    {
        return $this->ibu_kota;
    }
}


$kontruk = new Bali("Jono", "adiad.com", "iniWebsite", "Ini Gubernur");
// $oIbuKota = new Bali();

echo $kontruk->gubernur;
// echo $kontruk->getNama();    
// echo $kontruk->getWebsite();

// echo $oIbuKota->set_ibuKota("Denpasar");
// echo $oIbuKota->get_ibuKota();
