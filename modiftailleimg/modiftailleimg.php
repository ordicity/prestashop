<?php

if (!defined('_PS_VERSION_'))
    exit;

class modiftailleimg extends Module {

    public function __construct() {
        parent::__construct();
        $this->name = 'ModifTailleImg';
        $this->tab = 'Test';
        $this->version = 1.0;
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;
        $this->displayName = $this->l('ModifTailleImg');
        $this->description = $this->l("premet de changer l'affichage des images");
    }

    public function install() {
        if (parent::install() == false OR ! $this->registerHook('displayTopColumn'))
            return false;
        return true;
    }

    public function hookdisplayTopColumn($params) {
        global $smarty;
        return $this->display(__FILE__, 'ModifTailleImg.tpl');
    }

}
