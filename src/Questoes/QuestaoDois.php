<?php
namespace App\Questoes;

/**
*  
* App\Questoes\QuestaoDois class
*
* Um outro fato interessante descoberto pelos linguistas é que, no Googlon,
* os verbos sempre são palavras de 7 ou mais letras que terminam numa letra tipo bar. 
* Além disso, se um verbo começa com uma letra tipo foo, o verbo está em primeira pessoa.
* Assim, lendo o Texto A, é possível identificar 160 verbos no texto, dos quais 37 estão em primeira pessoa.
* Já no Texto B, quantos são os verbos?
* E quantos verbos do Texto B estão em primeira pessoa?
*/

class QuestaoDois extends Questao
{
  
  /**
   * resolve function
   *
   * @return void
   */
  public function resolve() : array
  {
    return [
      "verbs" => [
        "text_a" => $this->text_a->getVerbs(),  
        "text_b" => $this->text_b->getVerbs() 
      ]
    ];
  }

}