<?php 
class ovo
{
    public $default=5000; 
    public $bonus=3000; 
    /** Location for overloaded data. */ 
    private $data = array();

    /** Overloading not used on declared properties. */

    public function __set($name, $value)
    {

    $this->data[$name] = $value+$this->bonus;
    }

    public function __get($name)
    {

    if (array_key_exists($name, $this->data)) {
    return $this->data[$name]+$this->default;
    }

    return null;
    }
    public function getHidden()
    {
    return $this->hidden;
    }
}

$pelanggan_ovo = new ovo; 
$pelanggan_ovo->saldo="200000"; 
echo $pelanggan_ovo->saldo . "<br/><br/>";

?>