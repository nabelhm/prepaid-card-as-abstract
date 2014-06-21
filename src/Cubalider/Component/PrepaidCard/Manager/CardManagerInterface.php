<?php

namespace Cubalider\Component\PrepaidCard\Manager;

use Cubalider\Component\Money\Model\Money;
use Cubalider\Component\PrepaidCard\Model\Category;
use Cubalider\Component\PrepaidCard\Model\Card;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CardManagerInterface
{
    /**
     * Fetches given amount of new cards, of given category.
     * It marks cards as fetched, so they are not fetched again.
     *
     * @api
     * @param Category $category
     * @param integer $amount
     * @return Card[]
     */
    public function fetch(Category $category, $amount = 1);

    /**
     * Marks a card as utilized.
     * Card can't be used again.
     * It returns the card's utility.
     *
     * @api
     * @param Card $card
     * @return Money
     */
    public function utilize(Card $card);
}