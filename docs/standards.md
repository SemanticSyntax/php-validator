# 📐 SemanticSyntax Standards

**SemanticSyntax** maintains consistent coding and testing standards across all supported PHP versions (5.6, 7.4, 8.1+).  
This document serves as the official description of quality and style rules, ensuring that every package remains professional, reliable, and aligned with the brand’s philosophy: **code that makes sense**.

---

## 🧪 Testing Standards (`phpunit.xml.dist`)

| PHP Version | PHPUnit Version | Coverage & Logging | Strictness |
|-------------|-----------------|--------------------|------------|
| **PHP 5.6** | PHPUnit 5.7     | JUnit + Clover     | Basic (compatibility mode, minimal config) |
| **PHP 7.4** | PHPUnit 9.6     | JUnit + Clover + HTML | Strict (fail on risky & warning) |
| **PHP 8.1+** | PHPUnit 10.x    | JUnit + Clover + HTML | Very Strict (schema-based config, fail on risky & warning, modern features) |

### Key Principles
- All test suites bootstrap via `vendor/autoload.php`.
- Consistent **colors** and **verbose output** enabled.
- Coverage is reported in **Clover** (for CI tools), **JUnit** (for GitHub Actions), and **HTML/Text** (for developers).
- Tests must run cleanly across all supported PHP versions.

---

## 🎨 Code Style Standards (`phpcs.xml`)

| PHP Version | Base Standard | Extra Rules | Strictness |
|-------------|--------------|-------------|------------|
| **PHP 5.6** | PSR-2        | File & Function comments, forbid debug functions | Legacy-compatible but professional |
| **PHP 7.4** | PSR-12       | Function comments, strict whitespace rules, forbid debug functions | Strongly enforced |
| **PHP 8.1+** | PSR-12       | Function & File comments, strict whitespace rules, forbid debug functions, union/modern syntax support | Enterprise-level strictness |

### Key Principles
- **PSR-2 for PHP 5.6**: ensures compatibility with legacy codebases.
- **PSR-12 for PHP 7.4+**: modern and strict coding style.
- Debugging functions (`var_dump`, `print_r`, `die`, `exit`) are **forbidden** across all packages.
- Every file ends with a newline, UTF-8 encoding enforced.

---

## 🔑 SemanticSyntax Philosophy in Standards
- **Consistency**: every package (php5/php7/php8) follows a tailored but unified set of rules.
- **Professionalism**: CI/CD pipelines enforce these rules automatically.
- **Clarity**: style and tests ensure the codebase remains readable, reusable, and reliable.
- **Future-proofing**: older packages retain strictness while newer ones adopt modern PHP features.

---

## 📚 Related
- [CONTRIBUTING.md](../CONTRIBUTING.md)
- [SECURITY.md](../SECURITY.md)

> 🧩 **SemanticSyntax** is about more than passing tests — it’s about writing code that is syntactically correct and semantically clear, across all versions of PHP.
