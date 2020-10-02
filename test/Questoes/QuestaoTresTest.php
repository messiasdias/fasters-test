<?php
namespace Test\Questoes;

use PHPUnit\Framework\TestCase;
use App\Questoes\QuestaoTres;

/**
 * Class QuestaoTresTest
 */

 class QuestaoTresTest extends TestCase
 {
    /**
     * $questao variable
     *
     * @var QuestaoTres
     */
    private $questao;

    public function __construct()
    {
        parent::__construct();
        $this->questao =  new QuestaoTres();
    }

    public function test__construct()
    {   
        $this->assertInstanceOf(QuestaoTres::Class, $this->questao);
    }

    public function testResolve()
    {
      $this->assertEquals(true, is_array($this->questao->resolve()));
      $this->assertEquals([
        "numbers" => [
          "text_a" => ["beautiful" => 77,"total" => 600],
          "text_b" => ["beautiful" => 78,"total" => 600]
        ]
      ], $this->questao->resolve());
    }

}