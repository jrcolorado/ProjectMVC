
<?php
class HomeController extends Controller{
  
    public function __construct() {
        parent::__construct();
    }

    
	public function index() { 
            $dados = array();
            $fotos = new Fotos();
            $fotos->saveFotos();
            $dados['fotos'] = $fotos->getFotos();
            
           $this->loadTemplate('Home', $dados);
                      
}


}
?>