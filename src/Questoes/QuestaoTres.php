<?php 
namespace App\Questoes;

/**
* 
* App\Questoes\QuestaoTres class
* 
* Um professor universitário utilizará os textos A e B para ensinar o Googlon aos alunos.
* Para ajudar os alunos a compreender o texto, esse professor precisa criar uma lista de vocabulário para cada texto,
* isto é, uma lista ordenada (e sem repetições) das palavras que aparecem em cada um dos textos.
* Essas listas devem estar ordenadas e não podem conter repetições de palavras. 
* No Googlon, assim como no nosso alfabeto, as palavras são ordenadas lexicograficamente, 
* mas o problema é que no Googlon, a ordem das letras no alfabeto é diferente da nossa. 
* O alfabeto Googlon, em ordem, é: skmgnwqztxdrpcfjlbvh. Assim, ao fazer essas listas,
* o professor deve respeitar a ordem alfabética Googlon.
*
* $text_a e $text_b
*
* Mas como os Googlons escrevem números? Bem, no Googlon, as palavras também são números dados em base 20,
* onde cada letra é um dígito, e os dígitos são ordenados do menos significativo para o mais significativo (o inverso do nosso sistema).
* Ou seja, a primeira posição é a unidade, a segunda posição vale 20, a terceira vale 400, e assim por diante.
* Os valores das letras são dados pela ordem em que elas aparecem no alfabeto Googlon (que é diferente da nossa ordem, como vimos acima).
* Ou seja, a primeira letra do alfabeto Googlon representa o dígito 0, a segunda representa o dígito 1, e assim por diante.
* Por exemplo, a palavra ngvzwxt tem o valor numérico de 541663264.
* OBS: os números nesse problema podem ser grandes, então se você está usando um tipo de dados de tamanho limitado, tenha cuidado com possíveis overflows.
* Os Googlons consideram um número bonito se ele satizfaz essas duas propriedades:
* • é maior ou igual a 563131
* • é divisível por 5
* Ao consideramos o Texto A como uma lista de números (isto é, 
* interpretando cada palavra como um número usando a convenção explicada acima), notamos que existem 77 números bonitos distintos.
* E no Texto B, quantos números bonitos distintos existem?
*/

class QuestaoTres extends Questao
{
  /**
   * resolve function
   *
   * @return void
   */
  public function resolve() : array
  {
    return [
      "numbers" => [
        "text_a" => $this->text_a->getNumbers(),  
        "text_b" => $this->text_b->getNumbers() 
      ]
    ];
  }

}