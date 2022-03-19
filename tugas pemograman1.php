
<?php


class buah{
    public function __construct($nama="buah-buahan")
    {
        $this->nama = $nama;
    }

    public function jenis(){
        return "beraroma";
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
echo "bentuk :" .$buah->bentuk();
echo "<br>";
echo "biji : " .$buah2->biji();


echo "<hr>";

// gadget
$gatged = new iphone();
$gadget2 = new dell();

echo $gadget->handphone();
echo "<br>";
echo $gadget->leptop();
echo "<br>";
echo "<br>";
echo $gadget->harga();
echo "<br>";
echo $gadget->type();
echo "<br>";
echo "<br>";
echo $gadget2->harga();
echo "<br>";
echo $gadget2->type();
=======
