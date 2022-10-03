<?php
class Produto {

    private $nome_produto;
    private $descricao;
    private $estoque;
    private $preco;
    private $cor;
    private $peso;
    
    public function setNomeProduto($nome_produto)
    {
        if (is_string($nome_produto)) {
            $this->nome_produto = $nome_produto;
        } 
    }

    public function getNomeProduto()
    {
    return $this->nome_produto;
    }

    public function setDescricao($descricao)
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        } 
    }

    public function getDescricao()
    {
    return $this->descricao;
    }

    public function setEstoque($estoque)
    {
        if (is_numeric($estoque) AND $estoque > 0) {
        $this->estoque = $estoque;
        }

        return $this;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setPreço($preço)
    {
        if (is_numeric($preço)) {
            $this->preço = $preço;
        } 

        return $this;
    }

    public function getPreço()
    {
        return $this->preço;
    }

    public function setCor($cor)
    {
        if (is_string($cor)) {
            $this->cor = $cor;
        } 
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setPeso($peso, $medida)
    {
        if (is_numeric($peso) && is_string($medida)) {
            $this->peso = $peso . " $medida";
        } 
    }

    public function getPeso()
    {
        return $this->peso;
    }
}

$p1 = new Produto;
$p1->setNomeProduto('Chocolate');
$p1->setDescricao('É um alimento doce feito de cacau e açucar, muito comum no mundo inteiro');
$p1->setPreço(10);
$p1->setCor('Marrom');
$p1->setPeso(200, "gramas");
$p1->setEstoque(10);

print 'Nome do Produto: '. $p1->getNomeProduto() . '<br>'.PHP_EOL;
print 'Descrição: '. $p1->getDescricao() . '<br>'.PHP_EOL;
print 'Preço: ' . "R$" . $p1->getPreço() . '<br>'.PHP_EOL;
print 'Cor: ' .$p1->getCor() . '<br>'.PHP_EOL;
print 'Peso: ' .$p1->getPeso() . '<br>'.PHP_EOL;
print 'Estoque: ' .$p1->getEstoque() . '<br>'.PHP_EOL;

print $p1->setEstoque(1)->setPreço(10)->getPreço();

// if ($p1->getPreço() <= 10) {
//     echo "Você escolheu um produto barato";
// }

