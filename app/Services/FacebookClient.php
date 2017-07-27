<?php

namespace App\Services;


class FacebookClient implements SocialClient
{
    /**
     * @var \Facebook\Facebook
     */
    private $sdk;

    public function __construct($sdk)
    {
        $this->sdk = $sdk;
    }

    public function findUser($id)
    {
        try {
            $request = $this->sdk->get('/' . $id . '?fields=id,name,last_name');
            return $request->getBody();
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            throw new \Exception($e->getMessage(), 10020);
        }
    }
}