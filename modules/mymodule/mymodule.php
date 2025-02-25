<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class MyModule extends Module
{
    public function __construct()
    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('My module', [], 'Modules.Mymodule.Admin');
        $this->description = $this->trans('Description of my module.', [], 'Modules.Mymodule.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Mymodule.Admin');
        }
    }

    public function install()
{
    	if (Shop::isFeatureActive()) {
        	Shop::setContext(Shop::CONTEXT_ALL);
    	}

   	if (
		!parent::install() ||
		!$this->registerHook('header') ||
	        Configuration::updateValue('MYMODULE_NAME', 'my module')
	) {
		return false;
	}

	return true;
    }

    public function uninstall()
    {
	    if (
	        parent::uninstall() ||
        	Configuration::deleteByName('MYMODULE_NAME')
	    ) {
		    return false;
	    }

	    return true;
    }
	
    public function hookDisplayHeader($params) {
	return "Hello from " . $this->name;
    }
}
