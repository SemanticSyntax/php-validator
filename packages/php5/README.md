# SemanticSyntax Validator (PHP 5.6)

**Legacy-friendly validation helpers — bringing clarity and meaning to legacy PHP projects.**

This package is part of the **SemanticSyntax Validator monorepo**, which provides validation utilities for different PHP versions (5.6, 7.4, 8.1+). It is designed for projects that still run on PHP 5.6 but need reliable and structured validation logic.

---

## 📦 Installation

```bash
composer require semanticsyntax/validator-php5
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
var_dump(Validator::int('10', 1, 100)); // true

// Validate boolean
var_dump(Validator::bool('yes')); // true

// Validate date
var_dump(Validator::date('2025-09-17')); // true
var_dump(Validator::date('2025-13-01')); // false
```

---

## 🔑 Features
- Compatible with **PHP 5.6** (no strict types, no scalar hints).
- Provides common validation helpers (`email`, `ip`, `int`, `bool`, `url`, `date`, `time`, `dateTime`).
- API is consistent with the PHP 7.4 and PHP 8.1+ packages — upgrade path is smooth.
- Follows **PSR-2** coding standard and includes unit tests.

---

## 🧩 Philosophy
**SemanticSyntax** means code where syntax meets meaning. Even in legacy projects, validation code should remain clear, structured, and maintainable. 

This library helps ensure that your PHP 5.6 applications can still benefit from well-organized validation logic.

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

> This code is a **refactored demo** based on real-world projects — shared as part of the SemanticSyntax brand to highlight technical clarity and open-source collaboration.
