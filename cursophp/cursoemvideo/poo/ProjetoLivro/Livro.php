<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao{
    //atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //métodos
    public function detalhes(){
        echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
        echo "<br>Sendo lido por: " . $this->leitor->getNome();
    }
    
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual = 0;
        $this->aberto = $aberto = false;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    
    public function getTotPaginas($totPaginas){
        return $this->totPaginas;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    #[\Override]
    public function abrir() {
        $this->aberto = true;
    }

    #[\Override]
    public function avancarPag() {
        $this->pagAtual++;
    }

    #[\Override]
    public function fechar() {
        $this->aberto = false;
    }

    #[\Override]
    public function folhear($p) {
        $this->pagAtual = $p;
    }

    #[\Override]
    public function voltarPag() {
        $this->pagAtual--;
    }
}
