<?php

use App\Support\Facades\Facebook;

class EndPointTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->app->bind('facebook', function(){ return null;});
    }

    /**
     * A basic test.
     *
     * @return void
     */
    public function testFacebookUserSuccess()
    {
        Facebook::shouldReceive('get')
            ->with('/123456?fields=id,name,last_name')
            ->andReturn($this->facebookSuccessMock());

        $this->get('/profile/facebook/123456');
        $this->assertResponseStatus(200);
        $response = json_decode($this->response->getContent());

        $this->assertEquals(
            '123456', $response->id
        );

        $this->assertEquals(
            'Juan', $response->firstName
        );

        $this->assertEquals(
            'Perez', $response->lastName
        );
    }

    /**
     * A basic test.
     *
     * @return void
     */
    public function testFacebookUserFail()
    {
        Facebook::shouldReceive('get')
            ->with('/123456?fields=id,name,last_name')
            ->andReturn($this->facebookErrorMock());

        $this->get('/profile/facebook/123456');
        $this->assertResponseStatus(404);
        $response = json_decode($this->response->getContent());

        $this->assertEquals(
            '404', $response->code
        );

        $this->assertEquals(
            'Not Found', $response->message
        );
    }

    /**
     * A basic test.
     *
     * @return void
     */
    public function testProviderFail()
    {

        $this->get('/profile/twitter/123456');
        $this->assertResponseStatus(500);
        $response = json_decode($this->response->getContent());

        $this->assertEquals(
            '10010', $response->code
        );

        $this->assertEquals(
            'The provider is wrong, please try again', $response->message
        );
    }

    /**
     * A basic test.
     *
     * @return void
     */
    public function testNotFound()
    {

        $this->get('/other/endpoint/123456');
        $this->assertResponseStatus(404);
        $response = json_decode($this->response->getContent());

        $this->assertEquals(
            '404', $response->code
        );

        $this->assertEquals(
            '', $response->message
        );
    }

    private function facebookSuccessMock()
    {
        return new Class
        {
            public function getBody()
            {
                return json_encode([
                    "id" => 123456,
                    "name" => "Juan",
                    "last_name" => "Perez",
                ]);
            }
        };
    }

    private function facebookErrorMock()
    {
        return new Class
        {
            public function getBody()
            {
                throw new \Facebook\Exceptions\FacebookResponseException(
                    new \Facebook\FacebookResponse(
                        new \Facebook\FacebookRequest()
                    )
                );
            }
        };
    }
}
