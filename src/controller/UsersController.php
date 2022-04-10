<?php

require '../repositories/UserRepository.php';

class UsersController
{

    const LIST_LOCATION = 'Location: ../views/listUsers.php';

    public static function findUsers() {
        $users = new UserRepository();
        return $users->findAll();
    }

    public static function findById($userId)
    {
        $userRepo = new UserRepository();
        return $userRepo->findById($userId);
    }

    public static function findByName($aName)
    {
        $userRepo = new UserRepository();
        return $userRepo->findByName($aName);
    }

    public static function createUser($data)
    {
        $userRepo = new UserRepository();
        $userRepo->create([$data['name'], $data['genre'], $data['monthly']]);
        return header(self::LIST_LOCATION);
    }

    public static function updateUser($data)
    {
        $userRepo = new UserRepository();
        $userRepo->update([$data['name'], $data['monthly'], $data['id']]);
        return header(self::LIST_LOCATION);
    }

    public static function removeUser($userId)
    {
        $userRepo = new UserRepository();
        $userRepo->delete($userId);
        return header(self::LIST_LOCATION);
    }
}
