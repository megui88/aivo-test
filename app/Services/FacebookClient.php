<?php

namespace App\Services;

use App\User;
use Cache;
use App\Support\Facades\Facebook;

class FacebookClient implements SocialClient
{
    public function findUser($id)
    {
        $cacheKey = 'User:Facebook:' . $id;
        if (Cache::has($cacheKey)) {
            $body = Cache::get($cacheKey);
        } else {
            try {
                $request = Facebook::get('/' . $id . '?fields=id,name,last_name');
            } catch (\Facebook\Exceptions\FacebookResponseException $e) {
                throw new \Exception($e->getMessage(), 10020);
            }
            $body = json_decode($request->getBody());
            Cache::put($cacheKey, $body, 1000);
        }

        return new User($body->id, $body->name, $body->last_name);
    }
}