<?php


namespace Site;


abstract class Controller
{
    /** @var Repository */
    protected $repository;

    /** @var Viewer */
    protected $view;

    public function __construct()
    {
        $this->repository = new Repository();
        $this->view = new Viewer();
    }

    abstract public function getAction();

    abstract public function postAction();

    public function redirectToHomePage()
    {
        $redirectUrl = APP_URL . 'get';

        header("Location: {$redirectUrl}", 200);
        exit();
    }

    public function notFoundAction()
    {
        $this->view->render('404.tpl');
        exit();
    }
}
