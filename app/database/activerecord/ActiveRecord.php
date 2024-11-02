<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\UpdateInterface;
use Attribute;
use ReflectionClass;

//Não é possível instanciar essa classe em lugar nenhum, pois ela é abstrata
abstract class Activerecord implements ActiveRecordInterface
{
    //tabela que será enviada de dentro das classes dos Models
    protected $table = null;

    protected $attributes = [];

    /*Dentro dessa função, vai ser chamado $table e se ela não estiver sendo chamada como método protect, 
    quer dizer que ela não sendo chamada assim caindo dentro do if e verificando se é nula ou não*/
    public function __construct()
    {
        if (!$this->table) {
            //O "$this" dentro de ReflectionClass, faz referência a classe User
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
        }
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    //__set é um metodo mágico usado para escrever em dados protegidos ou privados e que não existe propriedades
    public function __set($attribute, $value)
    {
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute)
    {
        return $this->attributes[$attribute];
    }

    //Função para chamar o método que vai fazer o Update, ele executa a função update que vai ser responsável por chamar o update específico
    public function update(UpdateInterface $updateInterface)
    {
        // var_dump($this);
        // $this dentro da função é a instancia do próprio objeto
        return $updateInterface->update($this);
    }
    // public function insert(){

    // }
    // public function delete(){

    // }
    // public function find(){

    // }
    // public function findBy(){

    // }
    // public function all(){

    // }
}
