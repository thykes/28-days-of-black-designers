# 🛠️ Automated TDD Workflow

This repository includes a suite of tools to ensure content integrity and safe deployments to Fortrabbit.

## 1. 🛫 Pre-Flight Content Validator

Run this **before** starting work or committing to ensure your content structure is valid.

```bash
php scripts/preflight.php
```

**Checks performed:**

- **Structure:** Ensures all content folders are numbered (Listed).
- **Templates:** Verify correct `.txt` blueprint names.
- **Blueprints:** Scans for 'ghost' fields in content that are missing from blueprints.

## 2. 🕷️ Broken Link Scanner

Crawl your local site to find 404s in internal links and images.

```bash
php scripts/link-scanner.php
```

## 3. 🛡️ Rsync & Git 'Safety Shield'

Use this script to sync content **FROM production**, verify integrity, and auto-commit.

**Setup:**
Open `sync.sh` and edit the `SSH_USER` and `SSH_HOST` variables.

**Usage:**

```bash
chmod +x sync.sh
./sync.sh
```

**Steps:**

1. Dry-run Rsync (asks for confirmation).
2. Syncs `content/` and `media/` from remote.
3. Checks md5 checksums of the `site/` folder to detect code drift.
4. Auto-commits changes to Git.

## 4. 🚀 Post-Deploy Automation (Fortrabbit)

This script cleans the cache and fixes permissions on the server.

**Manual Trigger (via SSH):**

```bash
ssh your-app@deploy.fortrabbit.com 'bash -s' < scripts/remote-deploy.sh
```

**Automatic Trigger:**
Add to your `composer.json` under `scripts` -> `post-install-cmd` (if Composer is used on deploy) or configure a post-deploy hook in Fortrabbit dashboard to run:

```bash
sh scripts/remote-deploy.sh
```
