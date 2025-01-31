In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this example:

```php
<?php
$myArray = [
    'apple' => 1,
    'banana' => 2,
    'orange' => 3
];

//This will produce an unexpected result
echo $myArray[0]; // This outputs nothing, not an error

//However, accessing with string keys works fine
echo $myArray['apple']; //Outputs 1
?>
```

Many developers expect accessing `$myArray[0]` to either produce an error or return the first element ('apple' => 1). However, PHP's loose typing allows the array index to be treated as an integer.  The array doesn't have a numeric key of 0, so it returns null.  This can lead to unexpected null values or silent failures in your code. 