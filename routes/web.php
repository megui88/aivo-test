<?php

$app->get('/', function () use ($app) {
    return redirect('profile/facebook/123456');
});

$app->get('/profile/{provider}/{id}', 'Controller@profile');
