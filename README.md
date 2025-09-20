# SemanticSyntax Validator

[![CI](https://github.com/SemanticSyntax/php-validator/actions/workflows/ci.yml/badge.svg)](https://github.com/SemanticSyntax/php-validator/actions)
[![codecov](https://codecov.io/gh/SemanticSyntax/php-validator/branch/main/graph/badge.svg)](https://codecov.io/gh/SemanticSyntax/php-validator)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)
[![Packagist](https://img.shields.io/packagist/v/semanticsyntax/validator.svg)](https://packagist.org/packages/semanticsyntax/validator)
![PHPStan Level](https://img.shields.io/badge/PHPStan-level%20max-brightgreen)

**Code that makes sense.**  
Lightweight validation helpers for PHP 5.6, PHP 7.4, and PHP 8.1+.  
Part of the **SemanticSyntax** brand: writing code that is both syntactically valid and semantically meaningful.

---

## 📦 Packages
| PHP Version | Composer Package | Folder | Status |
|-------------|------------------|--------|--------|
| ✅ PHP 8.1+ | `semanticsyntax/validator`       | `packages/php8` | Active, modern strict version |
| ✅ PHP 7.4  | `semanticsyntax/validator-php7`  | `packages/php7` | Supported (strict typing) |
| ✅ PHP 5.6  | `semanticsyntax/validator-php5`  | `packages/php5` | Legacy (critical fixes only) |

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
Validator::input('user', INPUT_GET, FILTER_SANITIZE_STRING); // example of input filtering
```

---

## 🔑 Features
- Unified API across PHP 5.6, 7.4, and 8.1+.
- Helpers for `email`, `ip`, `int`, `bool`, `url`, `date`, `time`, `dateTime`, `input`.
- PSR-compliant coding standards: **PSR-2 (PHP 5.6)**, **PSR-12 (PHP 7.4/8.1+)**.
- Unit tested with PHPUnit.
- Static analysis (PHPStan) for PHP 7.4+ and 8.1+.
- Continuous Integration with GitHub Actions and Codecov.

---

## 🧩 Philosophy
> **SemanticSyntax** = syntax (form) + semantics (meaning).  
> We believe good code should be both correct for machines and clear for humans.

Even legacy PHP can be meaningful when structured with clarity. This project demonstrates how professional practices apply across generations of PHP.

📖 Learn more: [SemanticSyntax Philosophy](./docs/philosophy.md)

---

## 📐 Standards
See [Coding & Testing Standards](./docs/standards.md) for the official SemanticSyntax rules.  
Highlights:
- Unified rules per PHP version.
- Strict quality gates enforced by CI.
- No debug functions (`var_dump`, `print_r`, `die`, `exit`).

---

## 🌐 Live Examples
- GitHub Pages demo (planned) → will showcase validation helpers interactively.
- CodePen snippets for quick previews.

---

## 🤝 Contributing
We welcome contributions! Please read:
- [Contributing Guide](CONTRIBUTING.md)
- [Code of Conduct](CODE_OF_CONDUCT.md)

Run locally before committing:
```bash
composer fix     # auto-fix coding style
composer check   # run lint, analysis, and tests
```

👉 If you want to enable the pre-commit hook:
```bash
cp .git/hooks/pre-commit .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit
```

---

## 📜 License
Released under the [MIT License](LICENSE).

---

## 🔗 Related
- [Documentation](./docs/index.md)
- [Philosophy](./docs/philosophy.md)
- [Security Policy](SECURITY.md)
- [Changelog](CHANGELOG.md)
- [Packagist Packages](https://packagist.org/packages/semanticsyntax/)

---

> 🧩 **SemanticSyntax**: Building clarity, structure, and meaning into every line of code.
