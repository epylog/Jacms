<?php

namespace Jacms\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page_meta")
 */
class PageMeta
{
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
	 * @ORM\Id
	 * @ORM\OneToOne(targetEntity="Page", inversedBy="meta")
	 */
	private $page;

}
