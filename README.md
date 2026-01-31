# 28 Days of Black Designers

A curated exhibition platform celebrating the contributions of Black designers, built with [Kirby CMS](https://getkirby.com).

## 🚀 Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- A local server environment (MAMP, Laravel Valet, Herd, or PHP's built-in server)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/thykes/28-days-of-black-designers.git
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Start the server:
   ```bash
   composer start
   ```
   Or point your MAMP/Herd document root to the `28black` folder.

## 🛠 Automated TDD & Deployment Workflow

This project uses a custom suite of scripts to ensure content integrity and safe deployments to **Fortrabbit**.

### 1. Pre-Flight Content Validator

Run this before committing to verify content structure and data integrity.

```bash
php scripts/preflight.php
```

_Checks: Numbered folder prefixes, template naming conventions, and blueprint field synchronization._

### 2. Broken Link Scanner

Crawl the local site to find broken internal links or missing images.

```bash
php scripts/link-scanner.php
```

### 3. Sync & Deploy (The 'Safety Shield')

To sync production content (from Fortrabbit) to your local environment, check for code drift, and auto-commit:

```bash
./sync.sh
```

_Note: Configured for Fortrabbit. Ensure SSH access is set up._

### 4. Remote Deployment

Post-deployment tasks (cache clearing, permission fixes) are handled by:

```bash
scripts/remote-deploy.sh
```

---

## 📂 Project Structure

- **content/**: Flat-file content (Text files).
- **site/**: Templates, blueprints, and config.
- **assets/**: CSS, JS, and static images.
- **scripts/**: Automation tools for the TDD workflow.

---

Built with ❤️ using [Kirby](https://getkirby.com).
