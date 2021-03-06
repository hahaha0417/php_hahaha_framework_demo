<?php

namespace front\index;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_Index
 *
 * @ORM\Table(name="index_", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class A_Index
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
     * @var string|null
     *
     * @ORM\Column(name="page", type="string", length=25, nullable=true, options={"comment"="頁面 代表裡面都是特定內容"})
     */
    private $page;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item", type="string", length=50, nullable=true, options={"comment"="項目"})
     */
    private $item;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_describe", type="string", length=500, nullable=true, options={"comment"="項目 - 描述"})
     */
    private $itemDescribe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seperator1", type="string", length=10, nullable=true, options={"default"="|| ","comment"="分隔線"})
     */
    private $seperator1 = '|| ';

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
     * @ORM\Column(name="title", type="string", length=50, nullable=true, options={"comment"="標題"})
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_class", type="string", length=50, nullable=true, options={"comment"="標題 - 分類"})
     */
    private $titleClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_name", type="string", length=50, nullable=true, options={"comment"="標題 - 名稱"})
     */
    private $titleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_image", type="string", length=1000, nullable=true, options={"default"="#","comment"="標題 - 影像"})
     */
    private $titleImage = '#';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=1000, nullable=true, options={"default"="#","comment"="影像連結"})
     */
    private $image = '#';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true, options={"comment"="連結"})
     */
    private $url = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="describe_", type="text", length=65535, nullable=true, options={"comment"="描述 - HTML格式"})
     */
    private $describe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"comment"="內容 - HTML格式"})
     */
    private $content;

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
     * @ORM\Column(name="update_time", type="datetime", nullable=false, options={"comment"="更新時間"})
     */
    private $updateTime;


}
