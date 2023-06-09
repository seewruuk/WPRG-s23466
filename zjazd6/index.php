<?php


class NoweAuto {
    public $model;
    public $price;
    public $exchangeRate;


    public function ObliczCene($price, $exchangeRate) {
        $this->price = $price;
        $this->exchangeRate = $exchangeRate;
        $this->price = $this->price * $this->exchangeRate;
        return $this->price;
    }
}

class AutoZDodatkami extends NoweAuto {
    public $alarm;
    public $radio;
    public $klimatyzacja;

    public function ObliczCene($price, $exchangeRate) {
        $x = parent::ObliczCene($this->price, $this->exchangeRate);
        if ($this->alarm == true) {
            $x = $x + 1000;
        }
        if ($this->radio == true) {
            $x = $x + 500;
        }
        if ($this->klimatyzacja == true) {
            $x = $x + 2000;
        }
        return $x;
    }
}

class Ubezpieczenie extends AutoZDodatkami{
    public $procentowaWartoscUbezpieczenia;
    public $liczbaLatPosiadaniaAuta;

    public function ObliczCene($price, $exchangeRate) {
        $wartoscSamochodu = parent::ObliczCene($this->price, $this->exchangeRate);
        $wartoscUbezpieczenia = ($this->procentowaWartoscUbezpieczenia * ($wartoscSamochodu * (100-$this->liczbaLatPosiadaniaAuta)/100));
        return $wartoscUbezpieczenia;
    }
}

$noweAuto = new NoweAuto();
$noweAuto->model = "Audi";
$noweAuto->price = 100000;
$noweAuto->exchangeRate = 3.8;
echo "Cena auta: " . $noweAuto->ObliczCene($noweAuto->price, $noweAuto->exchangeRate);
echo "<br>";

$autoZDodatkami = new AutoZDodatkami();
$autoZDodatkami->model = "Audi";
$autoZDodatkami->price = 100000;
$autoZDodatkami->exchangeRate = 3.8;
$autoZDodatkami->alarm = true;
$autoZDodatkami->radio = false;
$autoZDodatkami->klimatyzacja = true;
echo "Cena auta z dodatkami: " . $autoZDodatkami->ObliczCene($autoZDodatkami->price, $autoZDodatkami->exchangeRate);
echo "<br>";

$ubezpieczenie = new Ubezpieczenie();
$ubezpieczenie->model = "Audi";
$ubezpieczenie->price = 100000;
$ubezpieczenie->exchangeRate = 3.8;
$ubezpieczenie->alarm = true;
$ubezpieczenie->radio = true;
$ubezpieczenie->klimatyzacja = true;
$ubezpieczenie->procentowaWartoscUbezpieczenia = 0.5;
$ubezpieczenie->liczbaLatPosiadaniaAuta = 6;
echo "Cena ubezpieczenia: " . $ubezpieczenie->ObliczCene($ubezpieczenie->price, $ubezpieczenie->exchangeRate);
echo "<br>";


?>