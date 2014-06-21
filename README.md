Cubalider Prepaid Card As Abstract
==================================

This library provides an abstraction for prepaid card concepts.

## Category

Prepaid cards are grouped into categories.

A category has a strid property to identify it and a description.
It has a cost and an utility, both properties represented in money.

You need to create your manager implementing `CategoryManagerInterface`.

```
// $manager = new CategoryManager();

$currency = $currencyManager->pick('USD');

// Adds category
$category = new Category();
$category->setStrid('10p');
$category->setDescription('10 points');
$category->setCost(new Money(8, $currency));
$category->setUtility(new Money(10, $currency));
$manager->add($category);

// Picks a category using an array of criteria
$currency = $manager->pick(array('strid' => '10p'));

// Picks a category using a strid directly
$currency = $manager->pick('10p');

// Removes a category
$manager->remove($category);

// Collects categories
$currencies = $manager->collect();
```

## Card

A card has a code, needed when the card is going to be used.

It belongs to a category, representing its cost and utility.

It has a status, "new" when the card is created, "fetched" when the card is
fetched from the system to the client, and "utilized" when the client uses the
card.

You need to create your manager implementing `CardManagerInterface`.

```
// $manager = new CardManager();

// Fetches a card from given category
$card = $manager->fetch($category);

// The client can store a reference to the card and use it in a future

// Mark card as utilized after it's used
$manager->utilize($card);

```