To avoid this issue, always use string keys when there's a chance of using non-integer keys.  Alternatively, explicitly cast any non-integer, non-string keys to integers.

```php
<?php
$arr = [];
$arr[(string)1.5] = 'value1'; // Use string casting to explicitly make the key a string
$arr[1] = 'value2';
echo $arr[1]; // Outputs 'value2'
echo $arr[(string)1.5]; //Outputs 'value1'
$arr2 = [];
$arr2[(int)1.5] = 'value3'; // explicit cast to integer
$arr2[1] = 'value4';
echo $arr2[1]; //Outputs 'value4', not value3. value3 is overwritten by value4 because of implicit cast to int
?>
```
Alternatively, you can use associative arrays to prevent such unexpected behavior.