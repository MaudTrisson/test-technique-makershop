<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>test requête SQL</title>
</head>
<body>
    <?php

    $bdd = new PDO("mysql:host=localhost;dbname=makershop", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $requete = $bdd->execute('SELECT SUM(total_paid_tax_excl - original_wholesale_price - warehouse_fees) 
                              FROM ps_opartdevis AS devis, ps_orders AS ord, ps_orders_details AS details 
                              WHERE id_employee_create = 10 AND date_add BETWEEN inter1 AND inter2 AND id_order.devis = id_order.ord AND id_order.ord = id_order.details');
    $requete->execute(); 
                
    $requete->closeCursor();
    ?>
</body>
</html>


