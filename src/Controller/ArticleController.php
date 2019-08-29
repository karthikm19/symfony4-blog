<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return $this->render('article/homepage.html.twig');
	}

	/**
	 * @Route("/article/{title}")
	 */
	public function show($title)
	{
		return $this->render('article/show.html.twig', [
			'title' => str_replace("-", " ", $title)
		]);
	}
}