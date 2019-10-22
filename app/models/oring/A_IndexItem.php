<?php

namespace oring;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_IndexItem
 *
 * @ORM\Table(name="index_item", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class A_IndexItem extends \hahahalib\hahaha_orm_doctrine_base
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
     * @var int
     *
     * @ORM\Column(name="content_show", type="smallint", nullable=false, options={"default"="1","comment"="內容 - 顯示"})
     */
    private $contentShow = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="type1", type="smallint", nullable=false, options={"comment"="類型1"})
     */
    private $type1 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content1", type="text", length=65535, nullable=true, options={"comment"="內容1 - HTML格式"})
     */
    private $content1;

    /**
     * @var int
     *
     * @ORM\Column(name="type2", type="smallint", nullable=false, options={"comment"="類型2"})
     */
    private $type2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content2", type="text", length=65535, nullable=true, options={"comment"="內容2 - HTML格式"})
     */
    private $content2;

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
     * @return A_IndexItem
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
     * @return A_IndexItem
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
     * @return A_IndexItem
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
     * Set contentShow.
     *
     * @param int $contentShow
     *
     * @return A_IndexItem
     */
    public function setContentShow($contentShow)
    {
        $this->contentShow = $contentShow;

        return $this;
    }

    /**
     * Get contentShow.
     *
     * @return int
     */
    public function getContentShow()
    {
        return $this->contentShow;
    }

    /**
     * Set type1.
     *
     * @param int $type1
     *
     * @return A_IndexItem
     */
    public function setType1($type1)
    {
        $this->type1 = $type1;

        return $this;
    }

    /**
     * Get type1.
     *
     * @return int
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * Set content1.
     *
     * @param string|null $content1
     *
     * @return A_IndexItem
     */
    public function setContent1($content1 = null)
    {
        $this->content1 = $content1;

        return $this;
    }

    /**
     * Get content1.
     *
     * @return string|null
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * Set type2.
     *
     * @param int $type2
     *
     * @return A_IndexItem
     */
    public function setType2($type2)
    {
        $this->type2 = $type2;

        return $this;
    }

    /**
     * Get type2.
     *
     * @return int
     */
    public function getType2()
    {
        return $this->type2;
    }

    /**
     * Set content2.
     *
     * @param string|null $content2
     *
     * @return A_IndexItem
     */
    public function setContent2($content2 = null)
    {
        $this->content2 = $content2;

        return $this;
    }

    /**
     * Get content2.
     *
     * @return string|null
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return A_IndexItem
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
     * @return A_IndexItem
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
     * @return A_IndexItem
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
