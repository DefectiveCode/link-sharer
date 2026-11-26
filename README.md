<p align="center">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://defectivecode.com/logos/logo-animated-dark.png">
      <img width="450" alt="Defective Code Logo" src="https://defectivecode.com/logos/logo-animated-light.png">
    </picture>
</p>

[English](https://www.defectivecode.com/packages/link-sharer/en) |
[العربية](https://www.defectivecode.com/packages/link-sharer/ar) |
[বাংলা](https://www.defectivecode.com/packages/link-sharer/bn) |
[Bosanski](https://www.defectivecode.com/packages/link-sharer/bs) |
[Deutsch](https://www.defectivecode.com/packages/link-sharer/de) |
[Español](https://www.defectivecode.com/packages/link-sharer/es) |
[Français](https://www.defectivecode.com/packages/link-sharer/fr) |
[हिन्दी](https://www.defectivecode.com/packages/link-sharer/hi) |
[Italiano](https://www.defectivecode.com/packages/link-sharer/it) |
[日本語](https://www.defectivecode.com/packages/link-sharer/ja) |
[한국어](https://www.defectivecode.com/packages/link-sharer/ko) |
[मराठी](https://www.defectivecode.com/packages/link-sharer/mr) |
[Português](https://www.defectivecode.com/packages/link-sharer/pt) |
[Русский](https://www.defectivecode.com/packages/link-sharer/ru) |
[Kiswahili](https://www.defectivecode.com/packages/link-sharer/sw) |
[தமிழ்](https://www.defectivecode.com/packages/link-sharer/ta) |
[తెలుగు](https://www.defectivecode.com/packages/link-sharer/te) |
[Türkçe](https://www.defectivecode.com/packages/link-sharer/tr) |
[اردو](https://www.defectivecode.com/packages/link-sharer/ur) |
[Tiếng Việt](https://www.defectivecode.com/packages/link-sharer/vi) |
[中文](https://www.defectivecode.com/packages/link-sharer/zh)

# Introduction

This package simplifies the process of adding share links to your Laravel application. Feel free to open a pull request if you notice we are missing a service!

A share link is a URL combining a social media base URL with query parameters for sharing content from your website or app. Parameters usually include the content URL and a preset message. These links, as shown in examples, let users easily share posts on platforms like Twitter, Facebook, and Telegram. Use this open-source package to quickly create share links via Laravel's blade component system.

## Example

```html
<x-link-sharer service="twitter" text="Share me!" url="https://www.defectivecode.com" hashtags="awesome,links" class="p-4">
    <!-- Your HTML code here to control the look and feel of the share button -->
    <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Click me!</span>
</x-link-sharer>
```

# Documentation

You may read the [documentation on our website](https://www.defectivecode.com/packages/link-sharer/en).

## Development

Use PHP 8.5 or newer, Composer 2, and Bun 1.4.5. Install development dependencies with the discovery hook enabled:

```sh
composer install
test -f bun.lock
bun install --frozen-lockfile
```

Run the tests and quality checks:

```sh
composer validate --strict
composer test
composer test -- --order-by random
composer analyse -- --no-progress
composer lint -- --test
bun --bun run format:check
bun --bun run package:check
```

Replay random test order with the reported seed by adding `--random-order-seed <seed>`. CI checks both lowest and stable Composer dependency resolutions on PHP 8.5, with randomized test order.

Use `composer lint` and `bun --bun run format` to apply formatting. Bun is pinned in `package.json`, and formatter scripts force the Bun runtime. Keep `bun.lock` tracked; `composer.lock` remains ignored for independent library dependency resolution.

Write any JavaScript in the package as TypeScript. The root `tsconfig.json` is strict and type-check only; run `bun --bun run typecheck` and add it to CI once the package has its first `.ts` file.

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
