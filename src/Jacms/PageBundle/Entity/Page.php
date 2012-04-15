<?php

namespace Jacms\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="smallint")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=25, unique=true)
	 */
	private $label;

	/**
	 * @ORM\Column(type="string", length=50)
	 */
	private $title;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $content;

	/**
	 * @ORM\OneToOne(targetEntity="PageMeta", mappedBy="page")
	 */
	private $meta;

}
