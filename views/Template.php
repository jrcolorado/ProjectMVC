<html>
    <head>
    <title>Aulas curso sobre MVC</title>
    <link href="<?php echo BASE_URL;?>/assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        
        <div id="topo">
            <center>
       <font color="red"><h1>Topo do meu site !!!!!</h1></font> 
        </center> 
    </div> 
         
        <div id="corpo">
             <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </div> 
        
     <div id="rodape">
            <center>
     <font color="red"><h1>Rodapé do meu site !!!!!</h1></font> 
        </center> 
    </div>        
    </body>
    
</html>