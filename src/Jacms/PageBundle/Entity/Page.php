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
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $description;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $keywords;

	/**
	 * @ORM\Column(type="string", length=50, nullable=true)
	 */
	private $author;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $content;

}
