<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use DateTime;
use PDOException;

class CalcCtrl
{

    protected $form;
    protected $result;

    public function __construct()
    {
        //stworzenie potrzebnych obiektów

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }


    public function getPar()
    {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->termin = getFromRequest('termin');
        $this->form->procent = getFromRequest('procent');
    }


    public function validate()
    {

        if (!(isset($this->form->kwota) && isset($this->form->termin) && isset($this->form->procent))) {
            return false;

        }


        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwate');
        }
        if ($this->form->termin == "") {
            getMessages()->addError('Nie podan termin');
        }
        if ($this->form->procent == "") {
            getMessages()->addError('Nie podane oprocentowanie');
        }

        if (getMessages()->isError()) return false;


        if (!is_numeric($this->form->kwota)) {
            getMessages()->addError('NIe prawidlowo podana wartość');
        }

        if (!is_numeric($this->form->termin)) {
            getMessages()->addError('NIe prawidlowo podana wartość');
        }
        if (!is_numeric($this->form->procent)) {
            getMessages()->addError('NIe prawidlowo podana wartość');
        }
        if ($this->form->termin == 0) {
            getMessages()->addError('Termin nie może być 0');
        }

        return ! getMessages()->isError();

    }


    public function action_calcCompute()
    {

        $this->getPar();

        if ($this->validate()) {
            //konwersja parametrów na int
            $this->form->kwota = intval($this->form->kwota);
            $this->form->termin = intval($this->form->termin);
            $this->form->procent = intval($this->form->procent);

            if ($this->form->termin!= 0 && $this->form->termin != null) {

                $this->result->result = ($this->form->kwota + $this->form->kwota / 100 * $this->form->procent) / ($this->form->termin * 12);

                $this->result->result = round($this->result->result, 2);

            }


           getDB()->insert("calc", [
                "kwota" => $this->form->kwota,
                "termin" => $this->form->termin,
                "oprocentowanie" => $this->form->procent,
                "wynik" => $this->result->result
            ]);



        }


        $this->generateView();

    }
    public function action_calcSave(){
        getDB()->insert("calc", [
            "kwota" => $this->form->kwota,
            "termin" => $this->form->termin,
            "oprocentowanie" => $this->form->procent,
            "wynik" => $this->result->result
        ]);
    }
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}






    public function generateView(){


       global $user;

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - BD');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);	

        getSmarty()->display('calc.tpl');
    }
}



