In PHP, a common yet subtle error arises when dealing with array keys that are not strictly strings or integers.  PHP's loose typing can lead to unexpected behavior. For example, if you use an array key that's a floating-point number, PHP might implicitly convert it to an integer, leading to key collisions and data loss.

```php
<?php
$arr = [];
$arr[1.5] = 'value1';
$arr[1] = 'value2';
echo $arr[1]; // Outputs 'value2', not 'value1' as you might expect
?>
```