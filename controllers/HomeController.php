
<?php
class HomeController extends Controller {
    
	public function index() {    
            $fotos = new fotos();
            $dados['fotos'] = $fotos->getFotos();
            
           $this->loadTemplate('Home', $dados);
                      
}

        public function sobre(){
                $dados = array();
                $this->loadTemplate('Sobre', $dados);
}

}
?>