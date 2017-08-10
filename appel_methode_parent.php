<?php
	class Voiture{
		private $marque;
		private $modele;
		private $prix;
		private $kilometrage;
		private $revision = 15000;
		private $deplacement = 1200;

		function __construct($marque, $modele, $prix){
			$this->marque = $marque;
			$this->modele = $modele;
			$this->prix = $prix;
		}

		function prevenir_revision(){
			if ($this->kilometrage >= 15000) {
				echo 'Vous devriez faire une revision';
			}
		}

		function deplacement(){
			echo 'Le véhicule avance<br>';
			$this->kilometrage += $this->deplacement;
		}

		function get_kilometre(){
			return $this->kilometrage;
		}

		function doubler(Voiture $voiture2){
			echo '<br>Je double une '.$voiture2->marque;
			
		}
	}


	class Vitesse extends Voiture{
		private $vitesse;

		function __construct($vitesse,$marque,$modele,$prix){
			$this->vitesse = $vitesse;
			parent::__construct($marque,$modele,$prix);
		}

		function passerLaVitesse(){
			$this->vitesse += 1;
			echo 'Vous passez la vitesse '.$this->vitesse.'<br>';
			parent::deplacement();
		}

	}

	$voiture = new Vitesse(0,'VW','Polo','2');
	$voiture->passerLaVitesse();
	$voiture->passerLaVitesse();

	$voiture2 = new Voiture('Peugeot','207','3');

	$voiture->doubler($voiture2);