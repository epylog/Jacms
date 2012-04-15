<?php

namespace Jacms\MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
	public function mainMenu(FactoryInterface $factory, array $options)
	{
		$em = $this->container->get('doctrine')->getEntityManager();

		$menu_id = 1;
		$menu_items = $em
			->getRepository('JacmsMenuBundle:MenuItem')
			->findByMenu($menu_id);

		$menu = $factory->createItem('root');
		$menu->setCurrentUri($this->container->get('request')->getRequestUri());
		foreach ($menu_items as $item)
			$menu->addChild($item->getName(), array(
				'route' => 'page_show',
				'routeParameters' => array('label' => $item->getPage()->getLabel())
			));

		return $menu;
	}
}
