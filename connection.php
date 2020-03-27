<?php
  $conexao = mysqli_connect("127.0.0.1",	"root",	"", "DB_MIRROR_FASHION", "3306");
                        
  if ($conexao -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conexao -> connect_error;
      exit();
  }

?>