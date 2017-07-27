# Test [Aivo](http://aivo.co/)

[![Build Status](https://travis-ci.org/megui88/aivo-test.svg)](https://travis-ci.org/megui88/aivo-test)
[![Coverage Status](https://coveralls.io/repos/github/megui88/aivo-test/badge.svg?branch=master)](https://coveralls.io/github/megui88/aivo-test?branch=master)

> ## Retrieve a user profile
>
> ###Objective
> Build a service which retrieves the profile of one facebook user, using the Facebook API Graph.
>
> We expect an API endpoint which we could hit with an facebook id as parameter and the response should be all the 
 possible information about his profile.
> 
> ###Example:
>
> Request:
>
> ```
> GET /profile/facebook/123456
> ```
>
>  Response:
> ```  
>  STATUS 200
>  {
>      "id": 123456,
>      "firstName": "Juan",
>      "lastName": "Perez"
>  }
> ```
>
> ###Conditions
>
> * The project should be developed using PHP 5.4+
> * If necessary, you can use any web framework of your choice, We recommend [SlimPHP](http://www.slimframework.com/)
> * You can use the data store solution of your choice if you need one
> * The full project should be correctly revisioned using GIT. That GIT repository should be accesible by us (publicly or 
 privately) on [GitHub](https://gist.github.com/aseba/github.com) or [BitBucket](https://bitbucket.org/).
> * You don't need to serve the project to the internet but it should be testeable locally using the 
 [php built-in webserver](http://php.net/manual/en/features.commandline.webserver.php) or similar solution with the 
 proper documentation on how to do it
> * Unit Tests are a big plus!
> * All added value you can give to the original idea is highly appreciated
> * Have Fun!

## Test solution by Mariano G. Egui 

* The project run in PHP 7.1
* I used Lumen framework, beacuse is the micro-framework to Laravel.
* I didn't use data storage on databases level.
* The project run in docker in develop enviroment.
* I used Functional Tests, becouse this tests the integration the services with framework context.
* I add Cache layer in the service to storage API response. Just to reduce time response.


### How to check?

Clone the project:

```
git clone --recursive git@github.com:megui88/aivo-test.git
```

Go to laradock and run docker-compose

```
cd aivo-test/laradock
cp env-example env
docker-compose build nginx workspace
```

Run docker:

```
docker-compose up -d nginx
```

Run composer:

```
docker-compose exec workspace bash

$: composer install
```

It is necessary you set the API keys in the enviroment file:

```
vim .env
```

Test in [localhost:80](http://localhost/)
