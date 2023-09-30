<p align="center"><img width="500" src="https://defectivecode.com/logos/logo-animated.gif" alt="Defective Code Logo"></p>

<p align="center">
    <a href="https://packagist.org/packages/defectivecode/link-sharer">
        <img src="https://poser.pugx.org/defectivecode/link-sharer/d/total.svg" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/defectivecode/link-sharer">
        <img src="https://poser.pugx.org/defectivecode/link-sharer/v/stable.svg" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/defectivecode/link-sharer">
        <img src="https://poser.pugx.org/defectivecode/link-sharer/license.svg" alt="License">
    </a>
</p>

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

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
