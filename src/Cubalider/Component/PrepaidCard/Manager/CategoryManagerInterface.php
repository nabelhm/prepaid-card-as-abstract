<?php

namespace Cubalider\Component\PrepaidCard\Manager;

use Cubalider\Component\PrepaidCard\Model\Category;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CategoryManagerInterface
{
    /**
     * Adds given category.
     *
     * @api
     * @param Category $category
     * @return void
     */
    public function add(Category $category);

    /**
     * Picks a category using given criteria
     *
     * @api
     * @param mixed $criteria
     * @return Category The category
     */
    public function pick($criteria);

    /**
     * Gets all categories.
     *
     * @api
     * @return Category[]
     */
    public function collect();

    /**
     * Removes given category.
     *
     * @api
     * @param Category $category
     * @return void
     */
    public function remove(Category $category);
}