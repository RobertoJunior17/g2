<?php

class Paginas extends Controller {

    public function index(){

        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];

        $this->view('paginas/home', $dados);
    }
    
}