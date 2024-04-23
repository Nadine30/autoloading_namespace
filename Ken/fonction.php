<?php
namespace Utilitaire;

class Fonction
{
    protected $tableau;

    public function __construct($tab)
    {
      $this->tableau = $tab; 
    }

    public function ken_count(array $tableau):int
    {
        echo 'Ce tableau contient '.count($tableau).' elements';
    }

}
// $tableau1=['bonjour','bonsoir'];
// ken_count($tableau1);

