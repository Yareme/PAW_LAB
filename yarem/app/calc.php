<?php

require_once dirname(__FILE__).'/../config.php';

//require_once _MAIN.'/app/security/login_v.php';
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów
function getPar(&$form){
    $form['kwota']=isset($_REQUEST["kwota"])?$_REQUEST["kwota"] :null;
    $form['termin'] =isset($_REQUEST['termin'])?$_REQUEST["termin"]:null;
    $form['procent'] = isset($_REQUEST['procent'])?$_REQUEST["procent"]:null;
}





// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$messages)
{

    if (!(isset($form['kwota']) && isset($form['termin']) && isset($form['procent']))) {
        //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
        //$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
        return false;
    }


    if ($form['kwota'] == "") {
        $messages [] = 'Nie podano liczby 1';
    }
    if ($form['termin'] == "") {
        $messages [] = 'Nie podano liczby 2';
    }
    if ($form['procent'] == "") {
        $messages [] = 'Nie podano liczby 3';
    }

        if (count ( $messages ) != 0) return false;


        if (!is_numeric($form['kwota'])) {
            $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
        }

        if (!is_numeric($form['termin'])) {
            $messages [] = 'Druga wartość nie jest liczbą całkowitą';
        }
        if (!is_numeric($form['procent'])) {
            $messages [] = 'Trzecia  wartość nie jest liczbą całkowitą';
        }
    if ($form['termin']==0) {
        $messages [] = '0';
    }

         if (count ( $messages ) != 0) return false;
         else return true;

    }





function process(&$form,&$messages,&$result)
{


    if (empty ($messages)) {
        //konwersja parametrów na int
        $form['kwota']= intval($form['kwota']);
        $form['termin'] = intval($form['termin']);
        $form['procent'] = intval($form['procent']);

        if($form['termin']!=0 && $form['termin']!=null){


          // $result=($form['kwota']*($form['procent']+($form['procent']/(1+$form['procent'])*$form['termin']-1)));




            if($form['termin']<12){
                $result=$form['kwota']/$form['termin'];
                $result= round($result,1);
                return;
            }

           // $result = ($form['kwota'] /100*($form['procent'])) / $form['termin'];
             $result = ($form['kwota'] + ($form['kwota']/100*$form['procent'])) / $form['termin'];
           //  $result= round($result,1);

        }





    }
}

$messages = array();
$form=array();

//wykonanie operacji

        getPar($form);

        if(validate($form,$messages));{
            process($form,$messages,$result);
            }



include 'calc_v.php';





?>





