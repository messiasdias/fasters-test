<?php
namespace Test\Questoes;

use PHPUnit\Framework\TestCase;
use App\Questoes\QuestaoDois;

/**
 * Class QuestaoDoisTest
 */

 class QuestaoDoisTest extends TestCase
 {
    /**
     * $questao variable
     *
     * @var QuestaoDois
     */
    private $questao;

    public function __construct()
    {
        parent::__construct();
        $this->questao =  new QuestaoDois();
    }

    public function test__construct()
    {   
        $this->assertInstanceOf(QuestaoDois::Class, $this->questao);
    }

    public function testResolve()
    {
      $this->assertEquals(true, is_array($this->questao->resolve()));
      $this->assertEquals([
        "verbs" => [
          "text_a" => ["first_person" => 37,"total" => 160],
          "text_b" => ["first_person" => 30,"total" => 142]
        ]
      ], $this->questao->resolve());
    }

}