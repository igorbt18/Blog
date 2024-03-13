<?php 
    // Criação da variável $base_url para armazenar a URL base do site
    
    // Construção da URL base usando partes da superglobal $_SERVER
    $base_url = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"] . "?") . "/";
    /*
        Explicação:
        - $_SERVER["SERVER_NAME"]: Obtém o nome do servidor (domínio).
        - dirname($_SERVER["REQUEST_URI"] . "?"): Obtém o diretório atual do script em execução
          e adiciona um caractere "?" para evitar que parâmetros da URL influenciem o caminho.
        - "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"] . "?") . "/":
          Combina as partes para formar a URL base completa.
    */
