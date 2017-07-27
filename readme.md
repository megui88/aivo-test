# Test [Aivo](http://aivo.co/)

[![Build Status](https://travis-ci.org/megui88/aivo-test.svg)](https://travis-ci.org/megui88/aivo-test)
[![Coverage Status](https://coveralls.io/repos/github/megui88/aivo-test/badge.svg?branch=master)](https://coveralls.io/github/megui88/aivo-test?branch=master)

> ## Retrieve a user profile   
> ###Objective
> Build a service which retrieves the profile of one facebook user, using the Facebook API Graph.
>
> We expect an API endpoint which we could hit with an facebook id as parameter and the response should be all the 
 possible information about his profile.
> ###Example:
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