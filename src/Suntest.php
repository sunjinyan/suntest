<?php
namespace Sun\Suntest;



use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Suntest
{
    protected $session;

    protected $config;

    public function __construct(SessionManager $sessionManager,Repository $repository)
    {
        $this->session  =   $sessionManager;
        $this->config   =   $repository;
    }

    public function test_rtn($msg   =   ''){
        $config_add =   $this->config->get('suntest.options');
        return  $msg.' <strong>from your custom develop package!</strong>>';
    }
}