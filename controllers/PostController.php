<?php
class postController extends Controller{
    
    public function index(){
        echo "esse é um teste controller";
    }
    public function ver($name, $sobrenome){
        echo "Meu nome é :".$name." ".$sobrenome;
    }
}
