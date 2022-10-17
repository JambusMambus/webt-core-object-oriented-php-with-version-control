<?php
require_once 'InterfaceVideo.php';
abstract class Video implements InterfaceVideo{

    public $name;
    public $src;
    public $html;


    public function __construct($name, $src, $html){
        $this->name = $name;
        $this->src = $src;
        $this->html = $html;
    }

    public function getName(){
        return $this->name;
    }

    public function getSource(){
        return $this->src;
    }

    public function getHtml(){
        return $this->html;
    }
}