<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  protected $connection = 'mysql';
  protected $table = 'cliente';
  protected $primaryKey = "id";
  protected $dates = [''];
  public $timestamps = false;
  //AQUI SERÃO REALIZADOS OS JOINS DA CONSULTA (JOINS FEITOS COM OUTRAS MODELS)
  
}
