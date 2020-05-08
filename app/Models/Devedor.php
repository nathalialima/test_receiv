<?php

namespace App\Models;

use App\Helpers\Model;

class Devedor extends Model {

    protected $table = 'devedor';

    protected $pk = 'id';

    public $nome;
    public $cpf_cnpj;
    public $data_nascimento;
    public $endereco;
    public $descricao_titulo;
    public $valor ;
    public $data_vencimento;
    public $updated;



}