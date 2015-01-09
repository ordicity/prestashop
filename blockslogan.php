<?php
if (!defined('_PS_VERSION_'))
  exit;
 
class blockslogan extends Module
  {
  public function __construct()
    {
    $this->name = 'blockslogan';
    $this->tab = 'Test';
    $this->version = 1.0;
    $this->author = 'Firstname Lastname';
    $this->need_instance = 0;
 
    parent::__construct();
 
    $this->displayName = $this->l('blockslogan');
    $this->description = $this->l('Description of blockslogan.');
    }
 
  public function install()
  {
  if (parent::install() == false OR !$this->registerHook('displayTop'))
    return false;
  return true;
  }
 
public function hookDisplayTop($params)
  {
  global $smarty;
  return $this->display(__FILE__, 'blockslogan.tpl');
  }

  }
?>