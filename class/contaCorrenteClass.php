<?php

class ContaCorrenteClass {
    public $num_agencia;
    public $num_conta;
    public $senha;
    public $saldo_debito;
    public $saldo_credito;
    public $titular;
    
    public function identificarConta($num_agencia, $num_conta) {
        $titular = "Nicolas Gross";
        return $num_agencia . "|" . $num_conta . "|" . $titular; 
    }

    public function mostrarSaldoDebito($num_agencia, $num_conta, $senha) {
        $saldo_debito = 100.000;
        if ($senha = "senhagenerica") {
            return $saldo_debito ; 
        } else {
            echo "Senha informada está incorreta";
        }
    }

    public function mostrarSaldoCredito($num_agencia, $num_conta, $senha) {
        $saldo_credito = 15000;
        if ($senha = "senhagenerica") {
            return $saldo_credito ; 
        } else {
            echo "Senha informada está incorreta";
        }
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

//Ver conta, saldo de débito, saldo de crédito
$identificação_da_conta = $objContaCorrente->identificarConta(12345, 54321);
$saldo_disponivel_debito = $objContaCorrente->mostrarSaldoDebito(12345, 54321, "senhagenerica");
$saldo_disponivel_credito = $objContaCorrente->mostrarSaldoCredito(12345, 54321, "senhagenerica");

$mensagem_debito = "O saldo disponível em sua conta para pagamentos em débito é: R$" . $saldo_disponivel_debito;
$mensagem_credito = "O saldo disponível em sua conta para pagamentos em crédito é: R$" . $saldo_disponivel_credito;

//Gerar chave pix por celular, cpf, email ou aleatória
$chave_aleatoria = $objChavePix->gerarChavePixAleatoria();
$chave_celular = $objChavePix->gerarChavePixCelular(48, 991999999);
$chave_cpf = $objChavePix->gerarChavePixCpf(213424124);
$chave_email = $objChavePix->gerarChavePixEmail("teste@teste.com");

print $identificação_da_conta . "\n";

if ($saldo_disponivel_debito >= 0 && $saldo_disponivel_credito >= 0) {
    print $mensagem_debito . "\n";
    print $mensagem_credito . "\n";
} else {
    print "Você está com saldo negativo tanto em débito quanto em crédito, entre em contato com o banco";
}

print_r("Sua chave pix aleatória é: " . $chave_aleatoria . PHP_EOL);
print_r("Sua chave pix celular é: " . $chave_celular . PHP_EOL);
print_r("Sua chave pix cpf é: " . $chave_cpf . PHP_EOL);
print_r("Sua chave pix email é: " . $chave_email . PHP_EOL);




