<?php

namespace Cubalider\Component\PrepaidCard\Model;

use Cubalider\Component\Money\Model\Currency;
use Cubalider\Component\Money\Model\Money;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 * @author Manuel Emilio Carpio <mectwork@gmail.com>
 */
class Category
{
    /**
     * @var string
     */
    private $strid;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $costAmount;

    /**
     * @var Currency
     */
    private $costCurrency;

    /**
     * @var float
     */
    private $utilityAmount;

    /**
     * @var Currency
     */
    private $utilityCurrency;

    /**
     * @param string $strid
     */
    public function setStrid($strid)
    {
        $this->strid = $strid;
    }

    /**
     * @return string
     */
    public function getStrid()
    {
        return $this->strid;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the cost.
     *
     * @param Money $cost
     */
    public function setCost(Money $cost)
    {
        $this->costAmount = $cost->getAmount();
        $this->costCurrency = $cost->getCurrency();
    }

    /**
     * Returns the cost.
     *
     * @return Money
     */
    public function getCost()
    {
        return new Money($this->costAmount, $this->costCurrency);
    }
    
    /**
     * Sets the utility.
     * 
     * @param Money $utility
     */
    public function setUtility(Money $utility)
    {
        $this->utilityAmount = $utility->getAmount();
        $this->utilityCurrency = $utility->getCurrency();
    }

    /**
     * Returns the utility.
     *
     * @return Money
     */
    public function getUtility()
    {
        return new Money($this->utilityAmount, $this->utilityCurrency);
    }
}