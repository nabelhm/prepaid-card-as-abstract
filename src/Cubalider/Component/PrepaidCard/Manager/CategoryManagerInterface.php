<?php

namespace Cubalider\Component\PrepaidCard\Manager;

use Cubalider\Component\PrepaidCard\Model\Category;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CategoryManagerInterface
{
    /**
     * Gets all categories.
     *
     * @api
     * @return Category[]
     */
    public function collect();
}