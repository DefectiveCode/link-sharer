# Skeleton

[![Latest Version on Packagist](https://img.shields.io/packagist/v/defectivecode/skeleton.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![Tests](https://img.shields.io/github/actions/workflow/status/defectivecode/skeleton/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/defectivecode/skeleton.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)

## Purpose

This package simplifies the process of adding share links to your Laravel application. A list of currently supported services can be found in the table below. We are constantly striving to expand our offerings and welcome contributions from the community. If you wish to add new services, please feel free to submit a pull request!

A share link is a URL that enables users to effortlessly share content from your website or application on various social media platforms or through other communication channels. It is composed of a base URL for a specific social media platform, combined with query parameters that define the content to be shared. These parameters typically include the URL of the page being shared and a pre-populated message or description. By embedding these share links in HTML anchor tags `<a>`, users are offered a smooth experience when sharing your content across different platforms. As illustrated in the examples, the share links enable users to share a blog post on Twitter, Facebook, and Telegram with a predefined message. This open-source package provides a convenient solution for generating share links, broadening the exposure and visibility of your content on popular social media platforms.

This package leverages Laravel's blade components to offer a quick and efficient way to integrate share links into your Laravel application. Blade components provide an expressive, clean syntax that makes it easy to register and render share links, improving the user experience for sharing your content across various platforms. Let's dive into an example to get started.

```html
<x-share-links::link
    service="twitter"
    text="Check out this Laravel package to make link sharing easy!"
    url="https://defectivecode.com/packages/link-sharer"
>
    <!-- Your HTML code here to control the look and feel of the share button -->
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Click me!</button>
</x-share-links::link>
```

> Some services provide extra parameters that can be passed to the component. These are documented in the table below.

# Installation

1. First install the PHP package by running the following composer command:
    ```bash
    composer require defectivecode/link-sharer
    ```
2. That's it! Our package will automatically install using Laravel's package discovery.

# Supported Services

| Service   | Text Supported | URL Supported | Notes                                                                                                                                                                              |
| --------- | :------------: | :-----------: | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Facebook  |       ❌       |      ✔️       |                                                                                                                                                                                    |
| Gmail     |       ✔️       |      ✔️       | Supports extra props <br> `to`: The to address of the email. <br> `su`: The subject of the email. <br> `bcc` The blind carbon copy addresses. <br> `cc` The carbon copy addresses. |
| LinkedIn  |       ❌       |      ✔️       |                                                                                                                                                                                    |
| Pinterest |       ✔️       |      ✔️       | `media`: An URL of an image you wish to share.                                                                                                                                     |
| Reddit    |       ✔️       |      ✔️       |                                                                                                                                                                                    |
| Telegram  |       ✔️       |      ✔️       |                                                                                                                                                                                    |
| Tumblr    |      ✔️️       |     ✔️ ️      | `tags`: Any tags you wish to have attached to the Tumblr post.                                                                                                                     |
| Twitter   |       ✔️       |      ✔️       |                                                                                                                                                                                    |
| Whatsapp  |       ✔️       |      ✔️       | URL is not supported by Whatsapp directly. We will append the URL provided to the text message.                                                                                    |

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
