# SemanticSyntax Validator (PHP 7.4)

**Strict-typed validation helpers for modern PHP 7.4 applications — where syntax meets meaning.**

This package is part of the **SemanticSyntax Validator monorepo**, which provides validation utilities for multiple PHP versions (5.6, 7.4, 8.1+). It is designed for projects running on PHP 7.4 and offers stricter typing and cleaner semantics than the legacy version.

---

## 📦 Installation

```bash
composer require semanticsyntax/validator-php7
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

// Validate date
var_dump(Validator::date('2025-09-17')); // true
var_dump(Validator::date('2025-13-01')); // false
```

---

## 🔑 Features
- Compatible with **PHP 7.4** (strict typing, return types, nullable hints).
- Provides common validation helpers (`email`, `ip`, `int`, `bool`, `url`, `date`, `time`, `dateTime`).
- API consistency with the PHP 5.6 and PHP 8.1+ packages ensures easy migration.
- Follows **PSR-12** coding standard, with unit tests and static analysis.

---

## 🧩 Philosophy
**SemanticSyntax** means writing code that is both syntactically correct and semantically clear. In PHP 7.4, this library demonstrates how validation logic can remain lightweight, strict, and expressive.

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

> This code is a **refactored demo** based on real-world projects — shared under the SemanticSyntax brand to highlight technical clarity, professional expertise, and open-source collaboration.
