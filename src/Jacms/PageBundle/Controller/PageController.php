<?php

namespace Jacms\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function showAction($label)
	{
		$page = $this->getDoctrine()
			->getRepository('JacmsPageBundle:Page')
			->findOneByLabel($label);

		if ($page)
			return $this->render('JacmsPageBundle:Page:show.html.twig', array('page' => $page));
		else
			throw $this->createNotFoundException('Page not found');

	}
}
