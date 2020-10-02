<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\App;

/**
 * Class AppTest
 */

 class AppTest extends TestCase
 {
    /**
     * $app variable
     *
     * @var App
     */
    private $app;

    public function __construct()
    {
        parent::__construct();
        $this->app = new App($test_mode = true);
    }

    public function test__construct()
    {   
        $this->assertInstanceOf(App::Class, $this->app);
    }

    public function testRun()
    {   
      $this->assertEquals( 
        [
          "prepositions" => [
            "text_a" => 22,  
            "text_b" => 20 
          ],
          "verbs" => [
            "text_a" => ["first_person" => 37,"total" => 160],
            "text_b" => ["first_person" => 30,"total" => 142]
          ],
          "numbers" => [
            "text_a" => ["beautiful" => 77,"total" => 600],
            "text_b" => ["beautiful" => 78,"total" => 600]
          ]
        ], 
        $this->app->run() 
      );
    }
}    