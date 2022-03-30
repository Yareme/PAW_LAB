<?php
require_once 'init.php';



//2. wykonanie akcji
switch ($action) {
    default : // 'calcView'
        // załaduj definicję kontrolera

        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView ();
        break;
    case 'calcCompute' :
        // załaduj definicję kontrolera

        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process ();
        break;

}
?>