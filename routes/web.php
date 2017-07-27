<?php

$app->get('/', function () use ($app) {
    return redirect('profile/facebook/10212435034623721');
});

$app->get('/profile/{provider}/{id}', 'Controller@profile');
