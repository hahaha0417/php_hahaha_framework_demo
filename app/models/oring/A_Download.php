<?php

namespace oring;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_Download
 *
 * @ORM\Table(name="download")
 * @ORM\Entity
 */
class A_Download extends \hahahalib\hahaha_orm_doctrine_base
{
    /**
     * @var int
     *
     * @ORM\Column(name="no", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $no;



    /**
     * Get no.
     *
     * @return int
     */
    public function getNo()
    {
        return $this->no;
    }
}
