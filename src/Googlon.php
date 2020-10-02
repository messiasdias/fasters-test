<?php
namespace App;

class Googlon
{
  /**
   * $foo_letters variable
   *
   * @var array
   */
  private $foo_letters = [];

  /**
   * $value variable
   *
   * @var string
   */
  private $value = '';

  /**
   * $prepositions variable
   *
   * @var int
   */
  private $prepositions = 0;

  /**
  * $verbs variable
  *
  * @var array
  */
  private $verbs = [
    "first_person" => 0,
    "total" => 0,
  ];

  /**
  * $numbers variable
  *
  * @var array
  */
  private $numbers = [
    "beautiful" => 0,
    "total" => 0,
  ];

  /**
   * $alphabet variable
   *
   * @var array
   */
  private $alphabet = [
    "positions" => [],
    "values" => []
  ]; 


  public function __construct(string $value = '', string $alphabet = "skmgnwqztxdrpcfjlbvh", string $foo_letters = "sjncq"  )
  { 
    $this->alphabet['positions'] = str_split(strtolower($alphabet));
    $this->foo_letters = str_split(strtolower($foo_letters));
    $this->setValue($value);
  }

  /**
   * getValue function
   *
   * @return string
   */
  public function getValue() : string
  {
    return $this->value;
  }

  /**
   * setValue function
   *
   * @param string $value
   *
   * @return void
   */
  public function setValue(string $value = '')
  {
    $this->value = $value;
    $this->countPrepositions();
    $this->countVerbs();
    $this->calculateAlphabetValues();
    $this->countNumbers();
  }

  /**
   * getPrepositions function
   *
   * @return int
   */
  public function getPrepositions() : int
  {
    return $this->prepositions;
  }

   /**
   * getVerbs function
   *
   * @return array
   */
  public function getVerbs() : array
  {
    return $this->verbs;
  }

   /**
   * getNumbers function
   *
   * @return array
   */
  public function getNumbers() : array
  {
    return $this->numbers;
  }


  /**
   * isBarType function
   *
   * @param string $letter
   * @return bool
   */
  public function isBarType(string $letter) : bool
  {
    return !$this->isFooType(substr($letter, -1));
  }

  /**
   * isFooType function
   *
   * @param string $letter
   *
   * @return bool
   */
  public function isFooType(string $letter) : bool
  {
    return in_array($letter, $this->foo_letters);;
  }

  /**
   * isPreposition function
   *
   * @param string $word
   * @return bool
   */
  public function isPreposition(string $word) : bool
  { 
    return (($this->isFooType(substr($word, -1)) && !strpos($word, 'l') && strlen($word) === 4) );
  }


  /**
   * countPrepositions function
   *
   * @return int
   */
  private function countPrepositions() : int
  {
    $this->prepositions = 0;
    foreach(explode(' ', $this->getValue()) as $word){
      if($this->isPreposition($word)){
        $this->prepositions++;
      }
    }
   return $this->getPrepositions();
  }

  /**
   * isVerb function
   *
   * @param string $word
   * @return bool
   */
  public function isVerb(string $word)
  {
    return (strlen($word) >= 7) && $this->isBarType(substr($word, -1)) ;
  }

  /**
   * isFirstPerson function
   *
   * @param string $word
   * @return bool
   */
  public function isFirstPerson(string $word) : bool
  {
    return $this->isVerb($word) && $this->isFooType(substr($word,0,1));
  }

  /**
   * countVerbs function
   *
   * @return void
   */
  private function countVerbs() 
  {
    $this->verbs['first_person'] = 0;
    $this->verbs['total'] = 0;

    foreach(explode(' ', $this->getValue()) as $word){
      if($this->isVerb($word)){
        $this->verbs['total']++;
        if($this->isFirstPerson($word)) $this->verbs['first_person']++;
      }
    }
  }

  /**
   * calculateAlphabetValues function
   *
   * @return void
   */
  private function calculateAlphabetValues() 
  { 
    foreach($this->alphabet['positions'] as $i => $letter){
      if( $i === 0 ){
        $this->alphabet['values'][$i] = 1;
        $i++;
      }
      $this->alphabet['values'][$i] = $this->alphabet['values'][$i-1] * 20;
    }
  }

  /**
   * getWordNumValue function
   *
   * @param string $word
   * @return int
   */
  public function getWordNumValue(string $word) : int
  {
    $value = 0;
    foreach( str_split($word) as $i => $letter){
      $key = array_search($letter, $this->alphabet['positions']); 
      $value += $this->alphabet['values'][$i] * $key;
    }
    return $value;
  }
  
  /**
   * isBeautyfullNumber function
   *
   * @param int $num
   * @return bool
   */
  public function isBeautifulNumber(int $num) : bool
  {
    return ($num >= 563131) && (($num % 5) === 0);
  }

   /**
   * countNumbers function
   *
   * @return array
   */
  private function countNumbers()
  {
    $this->numbers['beautiful'] = 0;
    $this->numbers['total'] = 0;
    foreach(explode(' ', $this->getValue()) as $word){
      $this->numbers['total']++;
      if($this->isBeautifulNumber($this->getWordNumValue($word))) $this->numbers['beautiful']++;
    }
  }

}