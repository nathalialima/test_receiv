<?php


namespace App\Helpers;


class Validations
{
    public function validateCreateDevedor($dado){
        $retorno = [
          'valido'=>true,
          'mensagem'=>''
        ];
        if (empty($dado['nome'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'Nome não preenchido <br>';
        }
        if (empty($dado['cpf_cnpj'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'CPF/CNPJ não preenchido <br>';
        }
        if (empty($dado['data_nascimento'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'Data de nascimento não preenchida <br>';
        }
        if (empty($dado['endereco'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'Endereço não preenchido <br>';
        }
        if (empty($dado['descricao_titulo'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'Descrição do Título não preenchida <br>';
        }
        if (empty($dado['valor'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'Valor não preenchido <br>';
        }
        if (empty($dado['data_vencimento'])){
            $retorno['valido'] = false;
            $retorno['mensagem'] .= 'Data de Vencimento não preenchida <br>';
        }
        return $retorno;
    }
}