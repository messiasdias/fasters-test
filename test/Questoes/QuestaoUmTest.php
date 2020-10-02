<?php
namespace Test\Questoes;

use PHPUnit\Framework\TestCase;
use App\Questoes\QuestaoUm;

/**
 * Class QuestaoUmTest
 */

 class QuestaoUmTest extends TestCase
 {
    /**
     * $questao variable
     *
     * @var QuestaoUm
     */
    private $questao;

    public function __construct()
    {
        parent::__construct();
        $this->questao =  new QuestaoUm();
    }

    public function test__construct()
    {   
        $this->assertInstanceOf(QuestaoUm::Class, $this->questao);
    }

    public function testResolve()
    {
      $this->assertEquals(true, is_array($this->questao->resolve()));
      $this->assertEquals(["prepositions" => ["text_a" => 22, "text_b" => 20 ]], $this->questao->resolve());
    }

}