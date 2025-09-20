# 📜 Changelog

All notable changes to **SemanticSyntax Validator** will be documented in this file.  
This project follows [Semantic Versioning](https://semver.org/) and adheres to professional release practices.

---

## [Unreleased]
### Added
- Documentation improvements in `/docs` (philosophy, standards, contributing).
- Enhanced CI pipeline with EditorConfig and Markdown lint checks.
- Pre-commit hook with automatic style fixes.

### Changed
- Unified coding standards across php5, php7, php8 packages.
- Improved README files with clearer examples and philosophy.

### Fixed
- Minor inconsistencies in PHPStan and PHPCS configurations.

---

## [1.0.0] - 2025-09-17
### Added
- Initial release of SemanticSyntax Validator monorepo.
- Packages:
  - `semanticsyntax/validator` (PHP 8.1+)
  - `semanticsyntax/validator-php7` (PHP 7.4)
  - `semanticsyntax/validator-php5` (PHP 5.6)
- Validation helpers: `email`, `ip`, `int`, `bool`, `url`, `date`, `time`, `dateTime`.
- Full monorepo CI/CD with GitHub Actions.
- Coding standards (PSR-2 for PHP 5.6, PSR-12 for PHP 7.4/8.1+).
- Unit tests for all supported PHP versions.
- Packagist integration for all packages.

---

## 🔑 Philosophy
Changelog entries must:
- Be clear, concise, and grouped under **Added / Changed / Fixed / Removed**.
- Reflect the philosophy of SemanticSyntax: clarity, professionalism, and transparency.

---

## 📚 Related
- [Contributing Guide](./CONTRIBUTING.md)
- [Security Policy](./SECURITY.md)
- [Coding Standards](./docs/standards.md)
