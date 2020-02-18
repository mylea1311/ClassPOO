<?php

class Ustensile
{
   private $name;
   private $utility;
   private $materiaux;
   //------------------------//
   ////////////CONSTRUCTEUR//////////////
   //------------------------//


   public function __construct($name, $utility, $materiaux)
   {
      $this->setName($name);
      $this->setUtility($utility);
      $this->setMateriaux($materiaux);
   }

   //------------------------//
   ////////////GETTERS//////////////
   //------------------------//

   /*
/ return $name
* type: string
*/
   public function getName()
   {
      return $this->name;
   }


   /*
/ return $utility
* type: string
*/
   public function getUtility()
   {
      return $this->utility;
   }


   /* 
*return $materiaux
*type:string
*/
   public function getMateriaux()
   {
      return $this->materiaux;
   }


   //------------------------//
   ////////////SETTERS//////////////
   //------------------------//

   /*
      *set value $name
      *type : string 
      */
   public function setName($name)
   {
      $this->name = $name;
   }

   /*
            *set value $utility
            *type : float 
            */
   public function setUtility($utility)
   {
      $this->utility = $utility;
   }


   /*
   *set value $materiaux
   *type: string
   */
   public function setMateriaux($materiaux)
   {
      $this->materiaux = $materiaux;
   }
}


//On affiche un résultat de notre classe grace au get et set 

//$test = new Ustensile('fouet', 'foutter', 'bois');
//echo $test->getName() . ' ' . $test->getUtility() . ' ' . $test->getMateriaux();


//$test1 = new Ustensile('four', 'cuir', 'fer');
//echo '<br />' . $test1->getName() . ' ' . $test1->getUtility() . ' ' . $test1->getMateriaux();
