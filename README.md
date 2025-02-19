# PHP Loose Comparison Bug

This repository demonstrates a common, yet subtle, bug in PHP related to loose comparison (==) when comparing strings and integers.  Specifically, it highlights the issue where the string '0' is considered equal to the integer 0 using loose comparison.

The `bug.php` file shows the erroneous comparison. The `bugSolution.php` file presents a corrected version using strict comparison (===).