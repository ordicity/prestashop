<?php

class blockformationaccueil extends Module {

    public function __construct() {
        $this->name = 'blockformationaccueil';
        $this->tab = 'Test';
        $this->version = 1.0;
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('blockformationaccueil');
        $this->description = $this->l('module permetant l\'affichage de la liste des fomations dans l\'accueil.');
    }

    public function install() {
        if (parent::install() == false OR ! $this->registerHook('displayRight'))
            return false;
        return true;
    }

    public function hookDisplayRight($params) {
        global $smarty;
        return $this->display(__FILE__, 'blockformationaccueil.tpl');
    }

}
