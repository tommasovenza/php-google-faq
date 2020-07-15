

<?php 

$database = [

    [
        'domanda' => 'prima domanda',
        'risposta' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Aspernatur hic deleniti non ratione assumenda dignissimos 
                        dicta cum debitis nulla ad nobis, a recusandae officia, autem, 
                        quasi odit corporis qui quod.'
    ],

    [
        'domanda' => '2domanda',
        'risposta' => 'Lorem ipsum dolor sit'
    ],

    [
        'domanda' => '3domanda',
        'risposta' => 'Lorem'
    ],

    [
        'domanda' => '4domanda',
        'risposta' => 'Lorem lorem lore m lorem'
    ],

];

    // var_dump($database['primo']);

    foreach ($database as $singolo_oggetto_corrente) {

        foreach ($singolo_oggetto_corrente as $chiave => $valore_chiave_singolo_oggetto_corrente) {
            
            echo $valore_chiave_singolo_oggetto_corrente . '<br>';
        }
        
    }

    

?>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
    
</body>
</html> -->