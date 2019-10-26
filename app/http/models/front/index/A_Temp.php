<?php

namespace front\index;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_Temp
 *
 * @ORM\Table(name="temp", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class A_Temp
{
    /**
     * @var int
     *
     * @ORM\Column(name="no", type="smallint", nullable=false, options={"comment"="編號"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $no;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false, options={"comment"="識別項"})
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stage", type="string", length=25, nullable=true, options={"comment"="舞台"})
     */
    private $stage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="string", length=15, nullable=true, options={"comment"="動作"})
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=false, options={"comment"="建立時間"})
     */
    private $createTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_time", type="datetime", nullable=false, options={"comment"="更新時間"})
     */
    private $updateTime;


}
