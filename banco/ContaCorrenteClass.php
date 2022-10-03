<?php

//Classe que identidica a conta corrente e o saldo
class ContaCorrenteClass
{
    public $num_agencia;
    public $num_conta;
    public $senha;
    public $saldo_debito;
    public $saldo_credito;
    public $titular;

    public function identificarConta($num_agencia, $num_conta)
    {
        $titular = "Nicolas Gross";
        return $num_agencia . "|" . $num_conta . "|" . $titular;
    }

    public function mostrarSaldoDebito($num_agencia, $num_conta, $senha)
    {
        $saldo_debito = 100.000;
        if ($senha = "senhagenerica") {
            return $saldo_debito;
        } else {
            echo "Senha informada está incorreta";
        }
    }

    public function mostrarSaldoCredito($num_agencia, $num_conta, $senha)
    {
        $saldo_credito = 15000;
        if ($senha = "senhagenerica") {
            return $saldo_credito;
        } else {
            echo "Senha informada está incorreta";
        }
    }

    public function verificaContaValida()
    {
        $conta = $this->identificarConta(12345, 54321);

        if (is_string($conta) && strpos($conta, "Nicolas Gross") !== false) {
            $conta_valida = true;
        } else {
            $conta_valida = false;
        }
        return $conta_valida;
    }
}

class ChavePixClass extends ContaCorrenteClass
{
    public $conta;
    public $aleatoria;
    public $celular;
    public $cpf;
    public $email;

    public function gerarStringAleatoria()
    {
        $length = 36;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function gerarChavePixAleatoria()
    {
        $chave_pix_aleatoria = $this->gerarStringAleatoria();

        return $chave_pix_aleatoria;
    }

    public function gerarChavePixCelular($ddd, $celular)
    {
        return "($ddd) " . $celular;
    }

    public function gerarChavePixCpf($cpf)
    {
        return $cpf;
    }

    public function gerarChavePixEmail($email) {
        if(is_string($email)) return $email;
        else return "E-mail inválido";
    }
}

$objContaCorrente = new ContaCorrenteClass;
$objChavePix = new ChavePixClass;

// print_r($objContaCorrente->verificaContaValida("Nicolas Gross"));
print_r("Sua chave pix aleatória é: " . $objChavePix->gerarChavePixAleatoria() . PHP_EOL);
print_r("Sua chave pix celular é: " . $objChavePix->gerarChavePixCelular(48, 991297246) . PHP_EOL);
print_r("Sua chave pix cpf é: " . $objChavePix->gerarChavePixCpf(4124124214) . PHP_EOL);
print_r("Sua chave pix email é: " . $objChavePix->gerarChavePixEmail("teste@teste.com") . PHP_EOL);
