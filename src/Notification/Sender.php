<?php

namespace App\Notification;

use Symfony\Component\Security\Core\User\UserInterface;

class Sender
{
    public function sendNewUserNotificationToAdmin(UserInterface $user) {
        //file_put_contents('debug.txt', $user->getEmail());
    }
}