<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <?php require_once ("./data/db.php"); ?>
</head>
<body>
    <h2>Foods</h2>

    <?php
        foreach ($foods as $food) {
    ?>
        <div>
            <h3>
                (<?php echo $food -> getCategory() -> getType(); ?>)
            </h3>
            <h4><?php echo $food -> getName(); ?></h4>
            <div>
                Prezzo: <?php echo $food -> getPrice(); ?> €
            </div>
            <div>
                Scadenza: <?php echo $food -> getExpireDate(); ?>
            </div>
            <div>
                Spese di spedizione: <?php echo $food -> getShipCost(); ?> €
            </div>
        </div>
    <?php
        }
    ?>

    <h2>Toys</h2>

    <?php
        foreach ($toys as $toy){
    ?>

    <div>
        <h3>
            (<?php echo $toy -> getCategory() -> getType(); ?>)
        </h3>
        <h4><?php echo $toy -> getName(); ?></h4>
        <div>
            Prezzo: <?php echo $toy -> getPrice();?> €
        </div>
        <div>
            Colore: <?php echo $toy -> getColor();?>
        </div>
        <div>
            Età: <?php echo $toy -> getAge(); ?> anni
        </div>
        <div>
            Spese di spedizione: <?php echo $toy -> getShipCost(); ?> €
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>