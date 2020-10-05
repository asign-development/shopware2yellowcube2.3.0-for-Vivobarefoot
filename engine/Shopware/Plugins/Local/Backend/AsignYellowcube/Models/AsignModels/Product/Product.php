<?php

/**
 * This file defines data model for Products
 *
 * PHP version 5
 *
 * @category  asign
 * @package   AsignYellowcube
 * @author    entwicklung@a-sign.ch
 * @copyright A-Sign
 * @license   https://www.a-sign.ch/
 * @version   2.1
 * @link      https://www.a-sign.ch/
 * @see       Product
 * @since     File available since Release 1.0
 */

namespace Shopware\CustomModels\AsignModels\Product;

use Doctrine\ORM\Mapping as ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * Defines data model for Products
 *
 * @category A-Sign
 * @package  AsignYellowcube
 * @author   entwicklung@a-sign.ch
 * @link     http://www.a-sign.ch
 */

/**
 * Shopware\CustomModels\AsignModels\Product\Product
 *
 * @ORM\Table(name="asign_yellowcube_product",indexes={@ORM\Index(columns={"artid"})})
 * @ORM\Entity(repositoryClass="Repository")
 */
class Product extends ModelEntity {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var integer $artid
	 *
	 * @ORM\Column(name="artid", type="integer", length=10, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $artid;

	/**
	 * @var integer $lastSent
	 *
	 * @ORM\Column(name="lastSent", type="boolean", precision=0, scale=0, nullable=false, unique=false)
	 */
	private $lastSent = false;

	/**
	 * @var string $ycSpsDetails
	 *
	 * @ORM\Column(name="ycSpsDetails", type="text", precision=0, scale=0, nullable=false, unique=false)
	 */
	private $ycSpsDetails = null;

	/**
	 * @var string $ycResponse
	 *
	 * @ORM\Column(name="ycResponse", type="text", precision=0, scale=0, nullable=false, unique=false)
	 */
	private $ycResponse = null;

	/**
	 * @var string $ycReference
	 *
	 * @ORM\Column(name="ycReference", type="integer", length=10, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $ycReference;

	/**
	 * @var \DateTime $createDate
	 *
	 * @ORM\Column(name="createDate", type="datetime", precision=0, scale=0, nullable=false, unique=false))
	 */
	private $createDate = null;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return int
	 */
	public function getArtid() {
		return $this->artid;
	}

	/**
	 * @param int $artid
	 */
	public function setArtid( $artid ) {
		$this->artid = $artid;
	}

	/**
	 * @return int
	 */
	public function getLastSent() {
		return $this->lastSent;
	}

	/**
	 * @param int $lastSent
	 */
	public function setLastSent( $lastSent ) {
		$this->lastSent = $lastSent;
	}

	/**
	 * @return string
	 */
	public function getYcSpsDetails() {
		return $this->ycSpsDetails;
	}

	/**
	 * @param string $ycSpsDetails
	 */
	public function setYcSpsDetails( $ycSpsDetails ) {
		$this->ycSpsDetails = $ycSpsDetails;
	}

	/**
	 * @return string
	 */
	public function getYcResponse() {
		return $this->ycResponse;
	}

	/**
	 * @param string $ycresponse
	 */
	public function setYcResponse( $ycresponse ) {
		$this->ycResponse = $ycresponse;
	}

	/**
	 * @return string
	 */
	public function getYcReference() {
		return $this->ycReference;
	}

	/**
	 * @param string $ycReference
	 */
	public function setYcReference( $ycReference ) {
		$this->ycReference = $ycReference;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreateDate() {
		return $this->createDate;
	}

	/**
	 * @param \DateTime $createDate
	 */
	public function setCreateDate( $createDate ) {
		$this->createDate = $createDate;
	}
}
