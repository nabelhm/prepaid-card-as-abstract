<?php

namespace Cubalider\Test\Component\PrepaidCard\Entity;

use Cubalider\Component\PrepaidCard\Model\Card;
use Cubalider\Component\PrepaidCard\Model\Category;

class CardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::__construct
     */
    public function testConstructor()
    {
        $card = new Card();
        $this->assertAttributeEquals(Card::STATUS_NEW, 'status', $card);
    }

    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::setCode
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::getCode
     */
    public function testCode()
    {
        $card = new Card();
        $this->assertNull($card->getCode());

        $card->setCode('123');
        $this->assertEquals('123', $card->getCode());
    }

    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::setStatus
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::getStatus
     */
    public function testStatus()
    {
        $card = new Card();

        $card->setStatus(1);
        $this->assertEquals(1, $card->getStatus());
    }

    /**
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::setCategory
     * @covers \Cubalider\Component\PrepaidCard\Model\Card::getCategory
     */
    public function testCategory()
    {
        $category = new Category();
        $card = new Card();

        $card->setCategory($category);
        $this->assertEquals($category, $card->getCategory());
    }
}