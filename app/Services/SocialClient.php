<?php

namespace App\Services;


interface SocialClient
{
    public function findUser($id);
}