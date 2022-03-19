
<?php


class buah{
    public function __construct($nama="buah-buahan")
    {
        $this->nama = $nama;
    }

    public function jenis(){
        return "mangga";
    }
    public function jenis2(){
        return "apel";
    }
    public function getNama(){
        return $this->nama;
    }
}


class mangga extends buah{
    public function rasa(){
        return "manis";
    }
    public function warna(){
        return "hijaukuning";
    }
}
class apel extends buah{
    public function bentuk(){
        return "bulat";
    }
    public function biji(){
        return "kecil-kecil";
    }
}

class  gadget{
    public function handphone(){
        return "samsung";
    }

    public function leptop(){
        return "asusrog";
    }
}

class iphone extends gadget{
    public function harga(){
        return "mahal";
    }
    public function type(){
        return "13promax";
    }
}

class dell extends gadget{
    public function harga(){
        return "menengah";
    }
    public function type(){
        return "ideapad";
    }
}


//buah
$buah = new mangga();
$buah2 = new apel();

echo "Nama : " . $buah->getNama();
echo "<br>";
echo "jenis: " . $buah->jenis();
echo "<br>";
echo "<br>";
echo "rasa: " . $buah->rasa();
echo "<br>";
echo "warna : " .$buah->warna();
echo "<br>";
echo "<br>";
echo "jenis: " . $buah2->jenis2();
echo "<br>";
echo "<br>";
echo "bentuk :" .$buah2->bentuk();
echo "<br>";
echo "biji : " .$buah2->biji();
echo "<br>";

//gadget
$gadget = new iphone();
$gadget2 = new dell();
echo "<br>";
echo "====================================";
echo "<br>";
echo "gadget :".$gadget->handphone();
echo "<br>";
echo "gadget :".$gadget2->leptop();
echo "<br>";
echo "<br>";
echo "harga :".$gadget->harga();
echo "<br>";
echo "type :".$gadget->type();
echo "<br>";
echo "<br>";
echo "harga :".$gadget2->harga();
echo "<br>";
echo "type : ".$gadget2->type();
