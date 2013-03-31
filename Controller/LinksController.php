<?php

App::uses('AppController', 'Controller');

class LinksController extends AppController {
	public function add(){
		// On vérifie si l'url n'existe pas déjà dans notre base de donnée.

		// On enregistre le tout dans notre base de donnée et on envoie l'id unique

		// On affiche à l'utilisateur ce qu'il veut.
		$this->render();
	}
}
