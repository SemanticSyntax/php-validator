# SemanticSyntax Validator (PHP 8.1+)

**Lightweight, strict-typed validation helpers — where syntax meets meaning.**

This package is part of the **SemanticSyntax Validator monorepo**, which provides validation utilities for multiple PHP versions (5.6, 7.4, 8.1+). It is the most up-to-date edition, taking full advantage of PHP 8.1+ features such as union types, `mixed`, and immutable date handling.

---

## 📦 Installation

```bash
composer require semanticsyntax/validator
```

---

## 🚀 Usage

```php
<?php
use SemanticSyntax\Validation\Validator;

// Validate email
var_dump(Validator::email('hi@example.com')); // true
var_dump(Validator::email('bad@')); // false

// Validate integer with range
var_dump(Validator::int(42, 1, 100)); // true

// Validate boolean
var_dump(Validator::bool('yes')); // true

// Validate date and time
var_dump(Validator::date('2025-09-17')); // true
var_dump(Validator::time('23:45'));       // true
var_dump(Validator::dateTime('2025-09-17T23:45:00+00:00')); // true
```

---

## 🔑 Features
- Designed for **PHP 8.1+** with modern type system (`mixed`, union types, immutable DateTime).
- Provides comprehensive validation helpers (`email`, `ip`, `int`, `bool`, `url`, `date`, `time`, `dateTime`).
- Strict typing and return types across the API.
- Fully compatible CI/CD workflow with tests, coding standards, and static analysis.
- Follows **PSR-12** coding standard and leverages advanced PHPUnit (10.x).

---

## 🧩 Philosophy
**SemanticSyntax** represents the principle that good code should be both syntactically correct and semantically meaningful. 

This package shows how modern PHP validation logic can be clear, strict, and future-proof — code that not only works, but makes sense.

---

## 📖 Documentation
- [Main Monorepo README](../../README.md)
- [API Reference (docs)](https://semanticsyntax.github.io/validator/)

---

## 🤝 Contributing
Contributions are welcome! Please see [CONTRIBUTING.md](../../CONTRIBUTING.md) for guidelines.

---

## 📜 License
Released under the [MIT License](../../LICENSE).

---

> This code is a **refactored demo** based on real-world projects — published under the SemanticSyntax brand to highlight clarity, professionalism, and open-source collaboration.
