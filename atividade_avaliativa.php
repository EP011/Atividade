<?php
// Questão 1
abstract class ItemCardapio{
    public $nome;
    public $preco;
    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    abstract public function preparar();
}

class PratoPrincipal extends ItemCardapio{
    public function __construct($nome, $preco)
    {
        parent::__construct($nome, $preco);
    }

    public function preparar(){
        echo "Prato principal no jeito <br>";
    }
}

class Sobremesa extends ItemCardapio{
    public function __construct($nome, $preco)
    {
        parent::__construct($nome, $preco);
    }


    public function preparar()
    {
        echo "Sobremesa feita <br>";
    }
}


// Questão 2

echo('--------------- 2 ------------------ <br>');

interface CriadorDeItem{
    public function criarItem();
};

class CriadorDePratoPrincipal implements CriadorDeItem {
    public function criarItem()
    {
        return new PratoPrincipal('Lasanha', 16.99);
    }
}

class CriadorDeSobremesa implements CriadorDeItem {
    public function criarItem()
    {
        return new PratoPrincipal('Sorvete', 4.99);
    }
}
// Questão 3 
class Pedido{
    private $itens = [];

    public function adicionarItem(ItemCardapio $item){
        $this->itens[] = $item;
    }

    public function resumirPedido(){
        foreach ($$this->itens as $item){
            echo 'Nome:' . $item->nome . '<br>';
            echo 'Nome:' . $item->preco . '<br>';
            $item->preparar();
        }
    }

}

?>