<p align="center"><img width="500" src="logo.gif" alt="Defective Code Logo"></p>
<p align="center" style="font-weight: bold">A package by Defective Code</p>

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

This package simplifies the process of adding share links to your Laravel application. A list of currently supported services can be found in the table below. We are constantly striving to expand our offerings and welcome contributions from the community. If you wish to add new services, please feel free to submit a pull request!

A share link is a URL that enables users to effortlessly share content from your website or application on various social media platforms or through other communication channels. It is composed of a base URL for a specific social media platform, combined with query parameters that define the content to be shared. These parameters typically include the URL of the page being shared and a pre-populated message or description. By embedding these share links in HTML anchor tags `<a>`, users are offered a smooth experience when sharing your content across different platforms. As illustrated in the examples, the share links enable users to share a blog post on Twitter, Facebook, and Telegram with a predefined message. This open-source package provides a convenient solution for generating share links, broadening the exposure and visibility of your content on popular social media platforms.

This package leverages Laravel's blade components to offer a quick and efficient way to integrate share links into your Laravel application. Blade components provide an expressive, clean syntax that makes it easy to register and render share links, improving the user experience for sharing your content across various platforms. Let's dive into an example to get started.

## Example

```html
<x-link-sharer service="twitter" text="Share me!" url="https://www.defectivecode.com" class="p-4">
    <!-- Your HTML code here to control the look and feel of the share button -->
    <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Click me!</span>
</x-link-sharer>
```

# Installation

1. First install the PHP package by running the following composer command:
    ```bash
    composer require defectivecode/link-sharer
    ```
2. That's it! Our package will automatically install using Laravel's package discovery.

# Services

## Support

Service providers occasionally update their share links without prior notice or maintaining backward compatibility. We make every effort to stay updated with these changes. However, if you encounter a non-functional service, kindly open an issue or submit a pull request. For adding a new service, refer to the [contributing](#contributing) section below.

> Some services provide extra parameters that can be passed to the component. These are documented in the table below.

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

# Contributing

# Contributing

Adding a service is relatively straightforward. Start by creating a new service class within the `src/Services` folder. Name the class after the service you're adding. The system automatically registers the service through the factory, so there's no need for manual registration.

The Gmail service provided below serves as a good example.

```php
<?php

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Gmail extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://mail.google.com/mail/u/0';

    protected array $baseParameterMapping = [
        'text' => 'body',
    ];

    protected array $additionalParameters = [
        'bcc',
        'cc',
        'su',
        'to',
    ];

    protected array $defaultParameters = [
        'view' => 'cm',
    ];
}
```

Please note that only the `baseUrl` is mandatory. The `baseParameterMapping`, `additionalParameters`, and `defaultParameters` are optional but can enhance functionality.

## `$baseUrl`

> A service's URL _doesn't_ need to start with HTTPS. For instance, Viber uses `viber://forward`.

The `baseUrl` property specifies the service's primary URL. This URL is foundational when generating the share link, to which query parameters get appended. Using Gmail as an example, its base URL is `https://mail.google.com/mail/u/0`.

## `$baseParameterMapping`

This package identifies two primary attributes: `text` and `url`, given their ubiquity across most service providers. Only define these attributes if the service in question employs a different naming convention. For instance, Gmail utilizes `body` in place of `text`, necessitating this explicit mapping. When using Gmail, any `text` attribute passed to the blade component gets transformed into the `body` query parameter in the share link.

## `$additionalParameters`

Some services accept more specific query parameters. Taking Gmail as a reference, it supports `bcc`, `cc`, `su`, and `to`. Define these in the `additionalParameters` array. When users include these attributes in the blade component, they get added to the share link. Ensure these parameters are also listed in the [supported services](#supported-services) table, complete with concise descriptions.

## `$defaultParameters`

Certain services mandate specific query parameters for the share link to function. As an example, Gmail necessitates the inclusion of `view=cm`. Such obligatory attributes are declared in the `defaultParameters` array. They always get appended to the share link and cannot be omitted.

## `prepareAttributes()`

To manipulate the attributes before generating a share link, introduce a `prepareAttributes` method to your service. This method activates prior to passing attributes to the `generateLink` method, allowing for custom attribute modifications. Below is a demonstration using the `AppendsLinks` trait.

```php
<?php

namespace DefectiveCode\LinkSharer\Traits;

trait AppendsLinks
{
    protected function prepareAttributes(): void
    {
        if (isset($this->attributes['text']) && isset($this->attributes['url'])) {
            $this->attributes['text'] = $this->attributes['text'] . "\n" . $this->attributes['url'];
            return;
        }

        if (isset($this->attributes['url'])) {
            $this->attributes['text'] = $this->attributes['url'];
        }
    }
}
```

Attributes passed into the service are accessible via the `$attributes` array. In the illustrated example:

-   If both `text` and `url` attributes are present, the `url` is appended to the `text` attribute.
-   Should only the `url` attribute be available, the `text` attribute assumes the value of the `url`.

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
