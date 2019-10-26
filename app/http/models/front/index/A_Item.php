<?php

namespace front\index;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity
 */
class A_Item
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
     * @var int
     *
     * @ORM\Column(name="order_", type="smallint", nullable=false, options={"comment"="排序"})
     */
    private $order = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false, options={"comment"="識別項"})
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item", type="string", length=255, nullable=true, options={"comment"="項目"})
     */
    private $item;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true, options={"comment"="圖片"})
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"comment"="內容 - HTML格式	"})
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true, options={"comment"="備註"})
     */
    private $comment;

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
