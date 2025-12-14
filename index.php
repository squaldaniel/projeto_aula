<?php

class carro
{
    // atributos | attributes
    public $cor;
    public $modelo;
    public $ano;

    // metodo | method
    public function ligar() {
        echo "O carro está ligado: ".$this->modelo;
    }
}

$uno = new carro();
$uno->cor = "vermelho";
$uno->modelo = "Fiat Uno";
$uno->ano = 2020;

//echo "a cor do carro ".$uno->modelo. ", é ".$uno->cor .".";


$mercedes = new carro();
$mercedes->cor = "preto";
$mercedes->modelo = "Mercedes Benz";
$mercedes->ano = 2024;
echo "<br/>";

//echo "a cor do carro ".$mercedes->modelo. ", é ".$mercedes->cor .".";

class lutador
{
    public $nome;
    public $nacionalidade;
    public $idade;
    public $altura;
    public $peso;
    public $forca;
    public $velocidade;
    private $energia = 100;

    public function apresentar() {
        echo "Lutador: ".$this->nome;
    }

    public static function ataque()
    {
        echo "Lutador atacou!";
    }
    public function fezniver()
    {
        $novaidade = $this->idade + 1;
        $this->idade = $novaidade;
        return $this->idade;
        // return $this->idade + 1;
    }
    public function status()
    {
        echo "Energia: ".$this->energia;
    }
}

$ryu = new lutador();
$ryu->nome = "Ryu";
$ryu->nacionalidade = "Japones";
$ryu->idade = 30;
$ryu->altura = 1.75;
$ryu->peso = 75;
$ryu->forca = 80;
$ryu->velocidade = 90;


$ken = new lutador();
$ken->nome = "Ken Masters";
$ken->nacionalidade = "Americano";
$ken->idade = 28;
$ken->altura = 1.78;
$ken->peso = 78;
$ken->forca = 85;
$ken->velocidade = 88;

$zangief = new lutador();
$zangief->nome = "Zangief";
$zangief->nacionalidade = "Russo";
$zangief->idade = 35;
$zangief->altura = 2.00;
$zangief->peso = 120;
$zangief->forca = 95;
$zangief->velocidade = 70;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo ao meu site!</h1>
    <p>
        <?php
            $ryu->apresentar();
            echo "<br/>";
            $ken->apresentar();
            echo "<br/>";
            $zangief->apresentar();
        ?>
    </p>
    <ul>
        <li>
            <?php if($ryu->forca > $ken->forca){
                echo $ryu->nome . " é mais forte que " . $ken->nome. '[mensagem 1]';
                } else {
                    echo $ken->nome . " é mais forte que " . $ryu->nome. '[mensagem 2]';
                } ?>
        </li>
        <li><?php if($ryu->forca > $zangief->forca){
                echo $ryu->nome . " é mais forte que " . $zangief->nome;
            } else {
                echo $zangief->nome . " é mais forte que " . $ryu->nome;
            } ?></li>
        <li>
            <?php lutador::ataque()?>
        </li>
        <li>
            <?php ; ?>
        </li>
        <li>
            <?php //echo  $ken->nome. ", fez aniersario. Agora possui " . $ken->fezniver(). " anos.". $ken->idade ?>

            <?php
            // $ken->fezniver();
            echo 'o lutador '. $ken->nome. ', possui de ';
            sleep(1);
            $ken->status() . '.';
            ?>
        </li>
    </ul>

</body>
</html>
