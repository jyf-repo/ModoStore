<?php

class ModoStore extends Module
{
    public function __construct()
    {
        $this->name = 'ModoStore';
        $this->description = 'Module de gestion pour e-boutique';
        $this->author = 'JYF';
        $this->version = '1.0.0';

        parent::__construct();

        $this->displayName = $this->l('MODOSTORE');
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

}