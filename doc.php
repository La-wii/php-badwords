<?php $titolo="Il Lonfo"; ?>

<?php
$paragrafo="Il Lonfo non vaterca né gluisce
e molto raramente barigatta,
ma quando soffia il bego a bisce bisce,
sdilenca un poco e gnagio s’archipatta.
È frusco il Lonfo! È pieno di lupigna
arrafferia malversa e sofolenta!
Se cionfi ti sbiduglia e ti arrupigna
se lugri ti botalla e ti criventa.
Eppure il vecchio Lonfo ammargelluto
che bete e zugghia e fonca nei trombazzi
fa legica busia, fa gisbuto;
e quasi quasi in segno di sberdazzi
gli affarferesti un gniffo. Ma lui, zuto
t’alloppa, ti sbernecchia;
e tu l’accazzi.";
?>

<?php $titolo_due="Censura creando nuova variabile + str_replace"; ?>

<?php $paragrafo_censurato = str_replace ('Lonfo', '***', $paragrafo);
?>

<?php $titolo_tre="Censura creando nuova variabile .GET + str_replace"; ?>

<?php $sostituici= $_GET["sostituisci"]?>

<?php $paragrafo_censurato_due = str_replace ($sostituici, '***', $paragrafo);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio PHP</title>
</head>
<body>
    <h1>
        <?php echo $titolo ?>
    </h1>

    <p>
        <?php echo $paragrafo ?>
    </p>

    <h2>
        <?php echo $titolo_due ?>
    </h2>

    <p>
        <?php echo $paragrafo_censurato ?>
    </p>

    <h2>
        <?php echo $titolo_tre ?>
    </h2>

    <p>
        <?php echo $paragrafo_censurato_due ?>
    </p>



</body>
</html>