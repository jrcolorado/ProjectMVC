<center><font color="black"><h3>Dados da tabela Fotos !!!!!</h3></font></center>  




 <div style="color:#0000FF" align="center">
     
<?php 
    foreach ($fotos as $foto){
        echo "Titulo: ".$foto['id'].'--'.$foto['titulo'].'---'.$foto['descricao']."<br/>";
    }
   ?>
  
</div> 