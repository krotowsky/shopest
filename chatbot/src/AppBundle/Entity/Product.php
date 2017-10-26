<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    public $name;

    /**
     * @var string
     *
     * @ORM\Column(name="websites", type="string", length=64, nullable=true)
     */
    private $websites = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=2048, nullable=true)
     */
    private $shortDescription = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    private $weight = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer", nullable=true)
     */
    private $depth = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="external_category_id", type="string", length=64, nullable=true)
     */
    private $externalCategoryId = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="magento_category_id", type="integer", nullable=true)
     */
    private $magentoCategoryId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="tax_class_id", type="string", length=8, nullable=true)
     */
    private $taxClassId = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="external_id", type="integer", nullable=true)
     */
    private $externalId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="external_supplier_id", type="string", length=8, nullable=true)
     */
    private $externalSupplierId = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="magento_id", type="integer", nullable=true)
     */
    private $magentoId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=13, nullable=false)
     */
    public $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=256, nullable=true)
     */
    public $image = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="additional_data", type="text", nullable=true)
     */
    public $additionalData = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

