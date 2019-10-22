<?php

namespace oring;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_ModelItem
 *
 * @ORM\Table(name="model_item", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class A_ModelItem extends \hahahalib\hahaha_orm_doctrine_base
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"comment"="內容"})
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
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
     * @ORM\Column(name="update_time", type="datetime", nullable=false, options={"comment"="修改時間"})
     */
    private $updateTime;



    /**
     * Get no.
     *
     * @return int
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set order.
     *
     * @param int $order
     *
     * @return A_ModelItem
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set id.
     *
     * @param string $id
     *
     * @return A_ModelItem
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set item.
     *
     * @param string|null $item
     *
     * @return A_ModelItem
     */
    public function setItem($item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item.
     *
     * @return string|null
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set content.
     *
     * @param string|null $content
     *
     * @return A_ModelItem
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return A_ModelItem
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createTime.
     *
     * @param \DateTime $createTime
     *
     * @return A_ModelItem
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime.
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime.
     *
     * @param \DateTime $updateTime
     *
     * @return A_ModelItem
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
