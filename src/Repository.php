<?php


namespace Site;


class Repository
{
    const USERS_FILENAME = 'users.json';

    public function getUsers(): array
    {
        if (! file_exists($this->getUsersFileName())) {
            return [];
        }

        try {
            $userData = file_get_contents($this->getUsersFileName());

            return json_decode($userData, true);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function addUser(string $name, string $email)
    {
        $existingUsers = $this->getUsers();

        $existingUsers[] = [
            'name' => $name,
            'email' => $email
        ];

        $this->overwriteFile($existingUsers);
    }

    private function getUsersFileName(): string
    {
        return APP_PATH . STORAGE_DIR . self::USERS_FILENAME;
    }

    private function overwriteFile(array $users)
    {
        $jsonData = json_encode($users);

        try {
            file_put_contents($this->getUsersFileName(), $jsonData);
        } catch (\Exception $e) {
            //
        }
    }
}
