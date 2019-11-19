<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit de deux nombres</title>
</head>
<body>

    <?php
$n1 = filter_input(INPUT_GET, "a", FILTER_SANITIZE_NUMBER_INT) ?? 0;
$n2 = filter_input(INPUT_GET, "b", FILTER_SANITIZE_NUMBER_INT) ?? 0;

$result = $n1 * $n2;

?>

    <p>
    Le produit de <?=$n1?> par <?=$n2?> est <?=$result?>
    </p>

    <table>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if ($i % 2) : ?>
                <tr style="background-color:#CCC;">
            <?php else : ?>
                <tr>
            <?php endif ?>
            <?php for ($k = 1; $k <= 10; $k++) : ?>
                <?php if ($k % 2 == 0) : ?>
                    <td style="background-color:#888;"> <?=$i * $k?> </td>
                <?php else : ?>
                    <td><?=$i * $k?></td>
                <?php endif ?>
            <?php endfor ?>
            </tr>
        <?php endfor ?>
        
    </table>

</body>
</html>