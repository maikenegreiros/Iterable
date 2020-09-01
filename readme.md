# Iterable\Iterator

In other languages, like Java, you can use Collections that allows only one type. In TypeScript, for example we can do the following:

```ts
public getItems(): Array<Items>
{
  return this.items;
}
```

Unfortunatelly, PHP doesn't have this kind of thing, that's why I created this abstract class

## Installing
This package is installed via composer:

```sh
composer require maike/iterable
```

## Usage

In order to achieve a Collection that allows only one type in PHP, we have to create a class. In the following example, I'm creating a Collection Class extending the `Iterable\Iterator` abstract class

### Creating a Collection Class
```php
use Iterable\Iterator;

class DateTimeCollection extends Iterator {
  public function __construct(\DateTime ...$items)
  {
    parent::__construct($items);
  }
}
```

With the above code we achieved two things:

1. We have a collection that only allows `DateTime` Objects.
2. We can iterate over our Collection as we do in an array. See the following example:

```php

$datesCollection = new DateTimeCollection(
  new \DateTime,
  new \DateTime,
  new \DateTime,
);

foreach ($datesCollection as $key => $date) {
  // Do whatever you want
}
```
## Contributing

### Run build
```sh
make build
```

### Run tests
```sh
make tests
```
