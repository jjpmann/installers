<?php
namespace Composer\Installers;

class ExpressionEngineInstaller extends BaseInstaller
{

    protected $system = 'system/';
    protected $webroot = 'public/';

    protected $locations = array(
        'addon'   => $this->system .'user/addons/{$name}/',
        'theme'   => $this->webroot.'themes/user/{$name}/',
    );
}
