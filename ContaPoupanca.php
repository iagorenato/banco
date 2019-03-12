<?php
    
    include_once("conta.php");


    class contaPoupanca extends Conta{
        private $taxa_rendimento;

    

    public function __construct($nome,$nro,$data,$saldo,$taxa_rendimento){
        parent::__construct($nome,$nro,$data,$saldo);
        $this->taxa_rendimento = $taxa_rendimento;
    }

    public function exibe_dados() {
        echo "<tr>
                   <td>".$this->get_nro()."</td>
                   <td>".$this->get_nome()."</td>
                   <td>".$this->get_data_abertura()."</td>
                   <td>$this->saldo</td>
                   <td>$this->taxa_rendimento</td> 
                </tr>";
    }

    }
?>