<?php

namespace app\controllers;
use app\forms\PersonSearchForm;
use app\forms\CalcForm;
use PDOException;

class CalcView
{

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct(){
        $this->form = new CalcForm();
}

    public function action_calcList(){


        try{
            $this->records = getDB()->select("calc", [
                "kwota",
                "termin",
                "oprocentowanie",
                "wynik",
            ] );
        } catch (PDOException $e){
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }

        // 4. wygeneruj widok
        getSmarty()->assign('searchForm',$this->form); // dane formularza (wyszukiwania w tym wypadku)
        getSmarty()->assign('list',$this->records);  // lista rekordów z bazy danych
        getSmarty()->display('ListView.tpl');
    }



}