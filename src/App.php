<?php
namespace App;
use App\Questoes\QuestaoUm;
use App\Questoes\QuestaoDois;
use App\Questoes\QuestaoTres;
use App\Googlon as Text;

class App 
{
  
  /**
   * $test_mode variable
   * 
   * @var bool
   */
  private $test_mode = false;

  public function __construct(bool $test_mode = false)
  {
    $this->test_mode = $test_mode;
  }

  private function show(array $data)
  {
    //Uso Ilustrativo
    header('HTTP/1.1 200');
    header('Content-Type: application/json;');
    echo json_encode($data);
  }

  public function run() : ?array
  { 
    //Uso Ilustrativo
    $um = new QuestaoUm();
    $dois = new QuestaoDois();
    $tres = new QuestaoTres();
    $data = array_merge($um->resolve(), $dois->resolve(), $tres->resolve());
    
    if($this->test_mode) return $data;
    return $this->show($data) ;
  }

}