
<?php
class HomeController extends Controller {
    
     
    
	public function index() { 
            $dados = array();
            $fotos = new fotos();
            $fotos->saveFotos();
            $dados['fotos'] = $fotos->getFotos();
            
           $this->loadTemplate('Home', $dados);
                      
}


}
?>