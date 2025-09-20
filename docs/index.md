# 📖 SemanticSyntax Documentation

Welcome to the official documentation of **SemanticSyntax Validator** — a set of lightweight validation helpers for PHP 5.6, PHP 7.4, and PHP 8.1+.  
The philosophy behind SemanticSyntax is simple: **code that makes sense** — both syntactically correct and semantically clear.

---

## 🌐 Overview
SemanticSyntax Validator provides unified APIs for common validation tasks:
- Email, IP, URL validation
- Integer and boolean checks
- Date, time, and datetime validation
- Input filtering via `Validator::input`
- Consistent interfaces across PHP 5.6, 7.4, and 8.1+

Each package is version-specific but designed with the same philosophy, ensuring smooth migration paths between PHP versions.

---

## 📦 Packages

| Package | PHP Version | Composer Package | Folder |
|---------|-------------|------------------|--------|
| ✅ Modern | PHP 8.1+ | `semanticsyntax/validator` | `packages/php8` |
| ✅ Stable | PHP 7.4  | `semanticsyntax/validator-php7` | `packages/php7` |
| ✅ Legacy | PHP 5.6  | `semanticsyntax/validator-php5` | `packages/php5` |

---

## 🚀 Quick Start

### Installation
```bash
# PHP 8.1+
composer require semanticsyntax/validator

# PHP 7.4
composer require semanticsyntax/validator-php7

# PHP 5.6
composer require semanticsyntax/validator-php5
```

### Usage Example
```php
use SemanticSyntax\Validation\Validator;

Validator::email('hi@example.com'); // true
Validator::date('2025-09-17');      // true
Validator::input('user', INPUT_GET, FILTER_SANITIZE_STRING); // demo input validation
```

---

## 🧩 Philosophy
> **SemanticSyntax** = correct form (syntax) + clear meaning (semantics).

Even legacy code can be structured and meaningful. These libraries embody that philosophy:
- PHP 5.6 → Legacy-friendly, minimal but clean.
- PHP 7.4 → Strict typing, reliable modern syntax.
- PHP 8.1+ → Enterprise-level strictness, future-proof features.

📖 Learn more: [SemanticSyntax Philosophy](./philosophy.md)

---

## 📐 Standards
SemanticSyntax maintains consistent standards across all packages. See:
- [Coding & Testing Standards](./standards.md)

Highlights:
- **PSR-2** for PHP 5.6, **PSR-12** for PHP 7.4+.
- Strict CI/CD pipelines (lint, tests, static analysis).
- Debug functions (`var_dump`, `print_r`, `die`, `exit`) are strictly forbidden.

---

## 🌐 Live Examples
- GitHub Pages demo (planned) → showcase validators interactively.
- CodePen snippets for quick PHP/JS demos.
- Interactive examples may include:
  - ✅ Email validator form
  - ✅ Date/time input checker
  - ✅ Boolean toggle demo

---

## ❓ FAQ
**Q: Why support PHP 5.6 when it is outdated?**  
A: Many legacy systems still use it. SemanticSyntax demonstrates how even old code can be structured and meaningful.

**Q: What is the difference between the PHP 7.4 and PHP 8.1+ packages?**  
A: PHP 7.4 uses strict typing but avoids newer constructs like union types. PHP 8.1+ adds union types, `mixed`, and immutable dates.

**Q: Can I contribute new validators?**  
A: Yes! See [CONTRIBUTING.md](../CONTRIBUTING.md).

---

## 🤝 Contributing
We welcome contributions! Please see [CONTRIBUTING.md](../CONTRIBUTING.md) for guidelines.

---

## 📜 License
Released under the [MIT License](../LICENSE).

---

## 🔗 Related
- [Main Repository](https://github.com/SemanticSyntax/php-validator)
- [Philosophy](./philosophy.md)
- [Standards](./standards.md)
- [Security Policy](../SECURITY.md)
- [Changelog](../CHANGELOG.md)

---

> 🧩 **SemanticSyntax** is not just about writing valid code, but about writing code that *makes sense* — readable, reusable, and reliable across generations of PHP.
