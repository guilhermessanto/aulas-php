<?php
$tituloSite = basename($_SERVER['PHP_SELF']);
if($tituloSite =="index.php"){

    $titulo = "Página Inicial";
}elseif($tituloSite =="produtos.php"){
    $titulo = "Produtos";
}elseif($tituloSite =="servicos.php"){
    $titulo = " Serviços";
}elseif($tituloSite =="contatos.php"){
    $titulo = "Contatos";
};


/* outra alternativa
switch ($tituloSite){
    case 'index.php': $titulo = "Página Inicial";break;
    case 'Produtos.php': $titulo = "Produtos";break;
    case 'servicos.php': $titulo = "Serviços";break;
    case 'contatos.php': $titulo = "Contatos";break;
}
*/
?>