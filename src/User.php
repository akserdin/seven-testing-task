<?php


namespace Site;


class User extends Controller
{
    const TEMPLATE_NAME = 'users.php';

    public function getAction()
    {
        $data = ['users' => $this->repository->getUsers()];

        $this->view->render(self::TEMPLATE_NAME, $data);
    }

    public function postAction()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->notFoundAction();
        }

        $helper = new Helper();

        $name = $helper->getSaveString($_POST['name']);
        $email = $helper->getSaveString($_POST['email']);

        if (! $name || ! $email) {
            $this->redirectToHomePage();
        }

        $this->repository->addUser($name, $email);
        $this->redirectToHomePage();
    }
}
