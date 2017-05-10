<html>
    <head>
    <title>Aulas curso sobre MVC</title>
    <link href="<?php echo BASE_URL;?>/assets/css/style.css" rel="stylesheet" />
    </head>
    <body>       
        <div id="topo">
            <center>
       <img align="center" src="assets/imagens/galeria123.png"/> 
        </center> 
    </div> 
         
        <div id="corpo">
             <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </div> 
        
     <div id="rodape">
            <center>
     <font color="black">pagina By JrColorado - joaoromario@gmail.com.br</font> 
        </center> 
    </div>        
    </body>
    
</html>