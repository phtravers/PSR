# StringGenerator

this lib can generates strings like password or lipsum.

## Password

this lib generates passwords

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generate(18, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY);
```
