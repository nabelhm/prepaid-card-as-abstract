<?php

namespace Cubalider\Test\Component\PrepaidCard\Entity;

use Cubalider\Component\Money\Model\Currency;
use Cubalider\Component\Money\Model\Money;
use Cubalider\Component\PrepaidCard\Model\Category;

class CategoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::setStrid
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::getStrid
     */
    public function testStrid()
    {
        $category = new Category();
        $this->assertNull($category->getStrid());

        $category->setStrid('foo');
        $this->assertEquals('foo', $category->getStrid());
    }

    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::setDescription
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::getDescription
     */
    public function testDescription()
    {
        $category = new Category();
        $this->assertNull($category->getDescription());

        $category->setDescription('desc');
        $this->assertEquals('desc', $category->getDescription());
    }

    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::setCost
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::getCost
     */
    public function testCostAmount()
    {
        $currency = new Currency('USD', 'Dollar');
        $cost = new Money(10, $currency);
        $category = new Category();
        $category->setCost($cost);

        $this->assertEquals($cost, $category->getCost());
    }

    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::setUtility
     * @covers \Cubalider\Component\PrepaidCard\Model\Category::getUtility
     */
    public function testUtilityAmount()
    {
        $currency = new Currency('USD', 'Dollar');
        $utility = new Money(10, $currency);
        $category = new Category();
        $category->setUtility($utility);

        $this->assertEquals($utility, $category->getUtility());
    }
}