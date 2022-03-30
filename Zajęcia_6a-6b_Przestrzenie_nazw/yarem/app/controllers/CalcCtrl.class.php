<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{

    private $form;
    private $result;

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


    public function process()
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


        }

        $this->generateView();

    }
    public function generateView(){


        getSmarty()->assign('page_title','Zajęcia 6a-6b');
        getSmarty()->assign('page_description','init.php. Przestrzenie nazw i automatyczne ładowanie klas');
        getSmarty()->assign('page_header','PHP');
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('calc.html');
    }
}



