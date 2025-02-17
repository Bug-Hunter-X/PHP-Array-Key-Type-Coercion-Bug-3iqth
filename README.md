# PHP Array Key Type Coercion Bug

This repository demonstrates a subtle bug in PHP related to array key type coercion. When using keys that are not strictly integers or strings, PHP's loose typing system can implicitly convert these keys to integers, potentially leading to data loss or unexpected behavior. The `bug.php` file demonstrates the issue, while `bugSolution.php` provides a solution.

## Bug Description
PHP's flexible type handling is a double-edged sword. While it offers convenience, it can introduce unforeseen problems when array keys are not explicitly integers or strings. In this case, a floating-point number used as a key is implicitly converted to an integer, resulting in key collisions.

## Solution
The solution involves strictly using string keys or explicitly casting keys to integers to avoid type coercion issues.

## How to reproduce
1. Clone the repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Compare it with the output of `bugSolution.php`.