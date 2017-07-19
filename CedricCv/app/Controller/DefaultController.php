<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	public function sitecedric()
	{
		DbFactory::start();
		$utilisateurs = \ORM::for_table('t_utilisateurs')->find_result_set();
		$this->show('default/sitecedric',['t_utilisateurs' => $utilisateurs]);
	}

}
