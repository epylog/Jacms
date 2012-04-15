<?php

namespace Jacms\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="menu_item")
 */
class MenuItem
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="smallint")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=25)
	 */
	private $name;

	/**
	 * @ORM\Column(type="smallint")
	 */
	private $position;

	/**
	 * @ORM\ManyToOne(targetEntity="Menu", inversedBy="items")
	 */
	private $menu;

	/**
	 * @ORM\OneToOne(targetEntity="Jacms\PageBundle\Entity\Page")
	 */
	private $page;

}
