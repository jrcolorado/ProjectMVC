<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
         <link href="<?php echo BASE_URL;?>/assets/css/style.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
   
        <div id="home">         
            
                      
<fieldset style = "width: 50%; margin: 0px auto;">
    <legend>Adicionar uma Foto</legend>
    
    <form method="POST" enctype="multipart/form-data">
        Titulo:<br/>
        <input type="text" name="titulo" /><br/><br/>
        
        Foto:<br/>        
        <input type="file" name="arquivo" /><br/><br/>
        
        <input type="submit" value="Enviar Arquivo" />
    </form>
</fieldset>
           
            </div>
<br/><br/>

<div id="foto">
  
    <?php foreach($fotos as $foto): ?><center>
<img src="assets/images/galeria/<?php echo $foto['url']; ?>" width="300" border="0" /><br/>

<?php echo $foto['titulo']; ?>
<br/><br/><br/>
<?php endforeach; ?>
</center>
</div>
               
    </body>
</html>



