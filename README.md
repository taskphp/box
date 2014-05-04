task/box
========

[![Build Status](https://travis-ci.org/taskphp/box.svg?branch=master)](https://travis-ci.org/taskphp/box)
[![Coverage Status](https://coveralls.io/repos/taskphp/box/badge.png)](https://coveralls.io/r/taskphp/box)

Example
=======

```php
use Task\Plugin\BoxPlugin;

$project->inject(function ($container) {
    $container['box'] = new BoxPlugin;
});

$project->addTask('box', ['box', function ($box) {
    $box->command('build')->pipe($this->getOutput());
});
```

Installation
============

Add to `composer.json`:
```json
...
"require-dev": {
    "task/box": "~0.1"
}
...
```

BOX_PATH
========

Box requires the `BOX_PATH` constant to be defined to work. It should contain a path to root of the box library; The plugin sets it to `./vendor/kherge/box` by default. If you have the library somewhere else, pass the path to the plugin constructor:
```php
$project->inject(function ($container) {
    $container['box'] = new BoxPlugin('path/to/box');
});
```
