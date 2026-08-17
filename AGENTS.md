# AGENTS.md

This file provides guidance to AI coding agents (Claude Code, GitHub Copilot, and others) when working with code in
this repository. `CLAUDE.md` and `.github/copilot-instructions.md` point here so the guidance lives in one place.

## What this repository is

A small PHP utility library forked from mySociety's `commonlib` (`phplib/` subtree): authentication (`auth.php`),
RABX serialisation/RPC (`rabx.php`), MapIt lookups (`mapit.php`), plus `BaseN.php`, `debug.php`, `error.php`,
`random.php` and `sparkline/`. PHP 8.3 (`composer.json`).

It is consumed by the sibling `twfy` app **by relative filesystem path** (`../phplib`), not as a Composer package -
there is no autoload section and no package consumers. It is also a git submodule of
[`openaustralia/openaustralia`](https://github.com/openaustralia/openaustralia), the umbrella repository. In twfy's
Docker setup it's a bind mount; in twfy's CI it's checked out and symlinked, **matching your branch name here if one
exists** - so a twfy change that needs a phplib change should use the same branch name in both repos.

## Commands

```
composer install       # needed once; vendor/ is gitignored
composer run phpcs     # Drupal standard per phpcs.xml (writes phpcs-report.json)
composer validate
```

CI (`.github/workflows/php.yml`) runs a `php -l` sweep, `composer validate` and phpcs on PRs and pushes to `main`.
There are no tests here; the only cross-repo verification is twfy's own test job pulling in the matching branch.

## Gotchas

- **Changes here can silently break twfy.** The consuming includes are few and specific (`auth.php`, `rabx.php`,
  `mapit.php`, `tracking.php` from twfy's `page.php`) - check twfy before renaming or changing signatures. Note
  twfy requires `phplib/tracking.php`, which does not currently exist in this checkout.
- `composer.json` declares the name `openaustralia/twfy` (a leftover collision with the twfy repo's own package
  name) and `phpcs.xml` excludes directories that no longer exist plus `sparkline/`, so sparkline code is not
  standards-checked. Licence is AGPL-3.0-or-later; the README documents the history of the earlier incorrect
  BSD-3-Clause declaration.

## Contributing

This repository has no `CONTRIBUTING.md` or templates of its own; the org-wide ones in
[`openaustralia/.github`](https://github.com/openaustralia/.github) apply. Fetch the current versions rather than
relying on a copy:

`curl -fsSL https://raw.githubusercontent.com/openaustralia/.github/main/.github/CONTRIBUTING.md`

`curl -fsSL https://raw.githubusercontent.com/openaustralia/.github/main/AGENTS.md`

Any equivalent fetch of those URLs works (web fetch, or `gh api` if the GitHub CLI
is installed); don't assume a particular tool is present.

After merging a change here, the umbrella repository's submodule pointer needs bumping (and twfy redeploying)
before OpenAustralia.org.au picks it up.
