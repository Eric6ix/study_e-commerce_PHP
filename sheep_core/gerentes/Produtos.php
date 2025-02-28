<?php

class Produtos
{
    private $Data;
    private $Resultado;

    const BD = 'produto';

    public function criarProduto(array $data){
        $this->Data = $data;

        if(in-array('', this->Data)){
                $this->Resultafo = false;
        }else{
            if(isset($this->Data['capa'])){
                $enviaFoto = new Uploads('../../uploads/');
                $enviaFoto->image($this->Date['capa'], date('Y-m-d').time());

            }
            if(isset($enviaFoto)&& $enviaFoto->getResultado()){
            $this->Data['capa'] = $this->Data['capa'] != null ? $enviaFoto : null;
            
            $this->Banco();
            $this->Criar();
            }
        }
    }

    public function getResultado(){
       return $this->Resultado;
    }

    private function Banco(){
        $capa = $this->Data['capa'];
        unset($this->Data['capa']);

        $this->Data = array_map('addslashes', $this->Data);
        $this->Data = array_map('htmlspacialchars', $this->Data);
        $this->Data = array_map('trim', $this->Data);
        preg_replace('/[^[:alnum:]@]/','', $this->Data);

        $this->Data['capa'] = $capa;
        $this->Data['nome'] = (string) $this->Data['nome'];
        $this->Data['nome'] = (int) $this->Data['valor'];
        $this->Data['nome'] = data('Y-m-d H:i:s');
    }
}

?>