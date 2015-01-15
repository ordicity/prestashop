<?php

class blockaffichageformation extends Module {

    public function __construct() {
        $this->name = 'blockaffichageformation';
        $this->tab = 'Test';
        $this->version = 1.0;
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('blockaffichageformation');
        $this->description = $this->l('module permetant l\'affichage d\'une formation.');
    }

    public function install() {
        if (parent::install() == false OR ! $this->registerHook('displayHeader'))
            return false;
        return true;
    }

    public function hookDisplayRight($params) {
        global $smarty;
        return $this->display(__FILE__, 'blockaffichageformation.tpl');
    }

}
