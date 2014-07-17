<?php

namespace Cubalider\Component\PrepaidCard\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 * @author Manuel Emilio Carpio <mectwork@gmail.com>
 */
class Card
{
    const STATUS_NEW = 1;
    const STATUS_FETCHED = 2;
    const STATUS_UTILIZED = 3;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var string
     */
    private $code;

    /**
     * @var int
     */
    private $status;

    public function __construct()
    {
        $this->status = self::STATUS_NEW;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}
