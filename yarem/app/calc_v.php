

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" >
    <legend>Kalkulator Kredytowyj</legend>
    <fieldset>

        <div class="form-row">
            <div class="col-7">
        <label for="inputPassword6">Podaj kwote krydytu</label>
        <input id="id_kwota" class="form-control"  type="text" name="kwota" value="<?php out($form['kwota']); ?>" />
            </div>
            <div class="col-7">
        <label for="inputPassword6">Podaj termin kredytru(w miesiącach)</label>
        <input id="id_termin" class="form-control" placeholder="" type="text" name="termin" value="<?php out($form['termin']); ?>" />
            </div>
            <div class="col-7">
        <label for="inputPassword6">Podaj oprocentowanie rocznie</label>
        <input id="id_procent"  class="form-control"   type="text" name="procent" value="<?php out($form['procent']); ?>" />
            </div>
        </div>


    </fieldset>

    <input type="submit"  class="btn btn-primary mt-2 mb-2" value="Oblicz"  />
</form>



<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
    if (count ( $messages ) > 0) {
        echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
        foreach ( $messages as $key => $msg ) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if (isset($result)&&$result!=null){ ?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
        <?php echo 'Wynik: '.$result; ?>
    </div>
<?php } ?>
</body>
</html>