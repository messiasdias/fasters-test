<?php
namespace App\Questoes;

interface QuestaoInterface 
{
  /**
   * resolve function
   *
   * @return array
   */
  public function resolve() : array;
}