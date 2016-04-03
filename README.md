# CompoundInterest

Utility class for calculating compound interest written in PHP.

[![Build Status](https://travis-ci.org/suzuki86/CompoundInterest.svg?branch=master)](https://travis-ci.org/suzuki86/CompoundInterest)

## Usage

### Namespace

Use `CompoundInterest\CompoundInterest` namespace.

```
use CompoundInterest\CompoundInterest;
```

### CompoundInterest::calculate()

Calculate compound interest.

```php
echo CompoundInterest::calculate(10000, 2, 5, 100); // 11230 will be printed.
```
