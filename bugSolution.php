The solution is to use strict comparison (===) instead of loose comparison (==). Strict comparison checks both the value and the type of the operands.  Therefore, it correctly distinguishes between the string '0' and the integer 0.

```php
<?php
$stringZero = '0';
$integerZero = 0;

// Incorrect loose comparison
if ($stringZero == $integerZero) {
    echo "Loose comparison considers '0' and 0 equal.\n";
}

// Correct strict comparison
if ($stringZero === $integerZero) {
    echo "Strict comparison considers '0' and 0 different.\n";
} else {
    echo "Strict comparison correctly identifies '0' and 0 as different.\n";
}
?>
```