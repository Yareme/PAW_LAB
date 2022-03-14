<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>



    <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" >
        <legend>Logowanie</legend>
        <div class="form-group row">
            <label for="id_login" class="col-sm-6 col-form-label">login: </label>
            <div class="col-sm-10">
                <input id="id_login" type="text" class="form-control" name="login" value="<?php out($form['login']); ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label for="id_pass" class="col-sm-6 col-form-label">Password</label>
            <div class="col-sm-10">
                <input id="id_pass" type="password" class="form-control" name="pass" />
            </div>
        </div>

        <input type="submit" value="Zaloguj" class="btn btn-primary mt-2 mb-2"/>

    </form>




<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>