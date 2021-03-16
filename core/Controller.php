<?php
require_once CORE.'/View.php';

class Controller 
{
    protected $view;
    public $request;

    Public function __construct(Request $request = null)
    {
        $this->request = $request !==null ? $request : new Request();
        $this->view = new View($this);

    }
} 