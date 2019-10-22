<?php

namespace oring;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_Model
 *
 * @ORM\Table(name="model", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class A_Model extends \hahahalib\hahaha_orm_doctrine_base
{
    /**
     * @var int
     *
     * @ORM\Column(name="no", type="integer", nullable=false, options={"comment"="編號"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $no;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block", type="string", length=50, nullable=true, options={"comment"="區塊"})
     */
    private $block;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=50, nullable=false, options={"comment"="項目"})
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="seperator1", type="string", length=10, nullable=false, options={"comment"="分隔線"})
     */
    private $seperator1 = '';

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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false, options={"comment"="名稱"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true, options={"comment"="標題"})
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_content", type="string", length=1000, nullable=true, options={"comment"="標題 - 內容"})
     */
    private $titleContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=1000, nullable=true, options={"default"="#","comment"="影像連結"})
     */
    private $image = '#';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=1000, nullable=true, options={"comment"="連結"})
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true, options={"comment"="備註"})
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_detail", type="text", length=65535, nullable=true, options={"comment"="備註 - 細節"})
     */
    private $commentDetail;

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
     * Set block.
     *
     * @param string|null $block
     *
     * @return A_Model
     */
    public function setBlock($block = null)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block.
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set item.
     *
     * @param string $item
     *
     * @return A_Model
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item.
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set seperator1.
     *
     * @param string $seperator1
     *
     * @return A_Model
     */
    public function setSeperator1($seperator1)
    {
        $this->seperator1 = $seperator1;

        return $this;
    }

    /**
     * Get seperator1.
     *
     * @return string
     */
    public function getSeperator1()
    {
        return $this->seperator1;
    }

    /**
     * Set order.
     *
     * @param int $order
     *
     * @return A_Model
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
     * @return A_Model
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
     * Set name.
     *
     * @param string $name
     *
     * @return A_Model
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set title.
     *
     * @param string|null $title
     *
     * @return A_Model
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleContent.
     *
     * @param string|null $titleContent
     *
     * @return A_Model
     */
    public function setTitleContent($titleContent = null)
    {
        $this->titleContent = $titleContent;

        return $this;
    }

    /**
     * Get titleContent.
     *
     * @return string|null
     */
    public function getTitleContent()
    {
        return $this->titleContent;
    }

    /**
     * Set image.
     *
     * @param string|null $image
     *
     * @return A_Model
     */
    public function setImage($image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set url.
     *
     * @param string|null $url
     *
     * @return A_Model
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return A_Model
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
     * Set commentDetail.
     *
     * @param string|null $commentDetail
     *
     * @return A_Model
     */
    public function setCommentDetail($commentDetail = null)
    {
        $this->commentDetail = $commentDetail;

        return $this;
    }

    /**
     * Get commentDetail.
     *
     * @return string|null
     */
    public function getCommentDetail()
    {
        return $this->commentDetail;
    }

    /**
     * Set createTime.
     *
     * @param \DateTime $createTime
     *
     * @return A_Model
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
     * @return A_Model
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
