<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        h1{
         margin-left:35px;
         color:blue;
        }
        table{
            border-collapse: collapse;
        }
        th,td{
            border:solid 1px black;
            padding:6px;
        }
        tr:nth-child(even) {
                background: #CCC;
            
        }
        tr:nth-child(odd) {
                background: #FFF;
        } 

    </style>
</head>
<body>
    <h1>Linguagens</h1>

<?php
    $linguagens = [
        [   
            "id" => 1,
            "linguagem" => "HTML" ,
            "descricao" => "Estruturação"
        ],
        [
            "id" => 2,
            "linguagem" => "CSS",
            "descricao" => "Estilos"
        ],
        [   
            "id" => 3,
            "linguagem" => "javascript",
            "descricao" => "Comportamento"
        ],
        [   
            "id" => 4,
            "linguagem" => "PHP",
            "descricao" => "Back-End"
        ]
    ];
?>
 <table>
     <th>Id</th>
     <th>Linguagem</th>
     <th> Descrição</th>
    <?php
   // $id = 1;
   foreach($linguagens as $linguagem ){ 
    ?>
    <tr>
     <!-- <td><?= $id++ ?></td> -->
     <td><?= $linguagem["id"] ?></td>
     <td><?= $linguagem["linguagem"] ?></td>
     <td><?= $linguagem["descricao"] ?></td>
    </tr> 
    <?php
        }
    ?>
</table>
</body>
</html>