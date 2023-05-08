<?php
/*
 require_once('class5.php');

 class Post {
    public $Title;
    public $Category;
    public $Tag;
public function __construct($titolo,Category $categoria,$tag)
{
 $this->Title = $titolo;
 $this->Category = $categoria;
 $this->Tag = $tag;

}

 }


$newPost = new Post('tizia ha sposato caio ',new Gossip(),'cronaca rosa');
echo $newPost->Category->getMyCategory(); //dal newpost richiamo la categoria e dalla categoria richiamo il metodo nella categoria
echo $newPost->Title; //dal newpost richiamo il */


trait Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
    public function sub($a, $b)
    {
        return $a - $b;
    }
    public function mul($a, $b)
    {
        return $a * $b;
    }
    public function div($a, $b)
    {
        return $a / $b;
    }
    public function sqr($a)
    {
        return sqrt($a);
    }
}

class Rettangolo
{
    use Calculator;

    public $base;
    public $altezza;

    public function __construct($b, $a)
    {
        $this->base = $b;
        $this->altezza = $a;
    }
    public function Area()
    {
        return $this->mul($this->base, $this->altezza);
    }
    public function Perimetro()
    {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }
    public function Diagonale()
    {
        $quadro = $this->sum($this->mul($this->base, ($this->base)), $this->mul(($this->altezza), ($this->altezza)));

        return sqrt($quadro);
    }

    public function stampamessaggio()
    {

        echo "L'area del rettangolo è " . $this->Area() . "\n";
        echo "Ilperimetro del rettangolo è " . $this->Perimetro() . "\n";
        echo "La diagonale del rettangolo è " . $this->Diagonale() . "\n";
    }
};

$rettangolo = new Rettangolo(8, 6);
$rettangolo->stampamessaggio();
