<?php                                                                                                                    
                                                                                                                         
$servidor = "localhost";                                                                                                 
$user = "root";                                                                                                          
$senha = "1234";                                                                                                             
$banco = "sefac";                                                                                                        

$con = mysqli_connect($servidor, $user, $senha, $banco);
if(!$con){                                                                                                               
    echo "Não obteve exito na conexão";
}                                                                                                                        
?>                                                                                                                       
