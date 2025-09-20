# 🤝 Contributing to SemanticSyntax

Thank you for considering a contribution to **SemanticSyntax Validator**!  
Our mission is to provide clear, reliable, and professional validation helpers for PHP 5.6, PHP 7.4, and PHP 8.1+.  
This guide explains how you can contribute effectively and in line with the SemanticSyntax brand philosophy: **code that makes sense**.

---

## 🛠 Getting Started
1. **Fork** the repository and create your branch from `main`.
2. Ensure you have the correct PHP version installed for the package you are working on:
   - PHP 5.6 → `packages/php5`
   - PHP 7.4 → `packages/php7`
   - PHP 8.1+ → `packages/php8`
3. Install dependencies:
   ```bash
   composer install
   ```

---

## 📏 Coding Standards
- **PHP 5.6** → PSR-2
- **PHP 7.4 / 8.1+** → PSR-12
- Use `composer lint` to check style and `composer fix` to auto-fix formatting.
- Avoid any debug functions: `var_dump`, `print_r`, `die`, `exit`.

---

## 🧪 Tests
- Run the test suite with:
  ```bash
  composer test
  ```
- Write unit tests for all new features or bug fixes.
- Ensure 100% of tests pass before submitting a PR.

---

## 🔎 Static Analysis
- For PHP 7.4+ / 8.1+, run:
  ```bash
  composer analyse
  ```
- All code must pass PHPStan checks at `level=max`.

---

## 🚀 Submitting a Pull Request
1. Provide a clear description of the change:
   - **What** it does.
   - **Why** it is needed.
   - **How** it was implemented.
2. Update documentation in `/docs` and README if relevant.
3. Ensure your branch passes:
   - `composer check`
   - CI/CD pipeline (lint, analyse, tests).

---

## 📦 Releases
- SemanticSyntax follows [Semantic Versioning](https://semver.org/):
  - **MAJOR**: Breaking changes
  - **MINOR**: New features, backwards compatible
  - **PATCH**: Bug fixes
- New versions are tagged in Git and published to Packagist.

---

## 🌐 Communication
- Use GitHub Issues for bug reports and feature requests.
- Pull Requests are the preferred way to propose changes.
- Respect the [Code of Conduct](./CODE_OF_CONDUCT.md).

---

## 🔑 Philosophy Reminder
> **SemanticSyntax** combines correct syntax with clear semantics.  
> All contributions should reflect clarity, professionalism, and long-term maintainability.
