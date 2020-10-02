<?php
namespace App\Questoes;

/**
*  
* App\Questoes\QuestaoUm class
*
* Arqueólogos encontraram um pergaminho com os seguintes textos:
*  $text_a e $text_b
* Esses pergaminhos estão no antigo e misterioso idioma Googlon. Após muitos anos de estudo, os linguistas já conhecem algumas características desse idioma.
* Primeiramente, as letras Googlon são classificadas em dois grupos: as letras s, j, n, c e q são chamadas "letras tipo foo",
* enquanto que as demais são conhecidas como "letras tipo bar".
* Os linguistas descobriram que as preposições em Googlon são as palavras de 4 letras que terminam numa letra tipo foo,
* mas onde não ocorre a letra l. Portanto, é fácil ver que existem 21 preposições no Texto A. E no Texto B, quantas preposições existem?
*/

class QuestaoUm extends Questao
{
  /**
   * resolve function
   *
   * @return array
   */
  public function resolve() : array
  {
    return [
      "prepositions" => [
        "text_a" => $this->text_a->getPrepositions(),  
        "text_b" => $this->text_b->getPrepositions() 
      ]
    ];
  }

}