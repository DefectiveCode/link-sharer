<p align="center"><img width="500" src="logo.gif" alt="Defective Code Logo"></p>

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

# Installation

1. First install the PHP package by running the following composer command:
    ```bash
    composer require defectivecode/link-sharer
    ```
2. That's it! Our package will automatically install using Laravel's package discovery.

# Services

> [!WARNING]
> Service providers occasionally update their share links without prior notice. We make every effort to stay updated with these changes. However, if you encounter a non-functional service, kindly open an issue or submit a pull request. For adding a new service, refer to the [contributing](#contributing) section below.

> [!NOTE]
> Some services provide extra parameters that can be passed to the component. These are documented in the table below.

| Service     | Text Supported | URL Supported | Notes                                                                                                                                                                                                                  |
| ----------- | :------------: | :-----------: | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Blogger     |       ✔️       |      ✔️       | `t` The text of the blog post.                                                                                                                                                                                         |
| Diaspora    |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Diigo       |       ✔️       |      ✔️       | `description` A description to add to the post.                                                                                                                                                                        |
| Douban      |       ✔️       |      ✔️       | `comment` A commend to add to the post.                                                                                                                                                                                |
| Evernote    |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Facebook    |       ❌       |      ✔️       |                                                                                                                                                                                                                        |
| Flipboard   |       ✔️       |      ✔️       | `quote` A quote to add to the post.                                                                                                                                                                                    |
| Gmail       |       ✔️       |      ✔️       | `bcc` A comma-separated list of email addresses to BCC. <br> `cc` A comma-separated list of email addresses to CC. <br> `su` The subject of the email. <br> `to` A comma-separated list of email addresses to send to. |
| HackNews    |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Instapaper  |       ✔️       |      ✔️       | `description` A description of the post.                                                                                                                                                                               |
| LineMe      |      ❌️       |      ✔️       |                                                                                                                                                                                                                        |
| LinkedIn    |       ❌       |      ✔️       |                                                                                                                                                                                                                        |
| LiveJournal |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Meneame     |      ❌️       |      ✔️       |                                                                                                                                                                                                                        |
| Okru        |      ❌️       |      ✔️       |                                                                                                                                                                                                                        |
| Outlook     |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Pinterest   |       ✔️       |      ✔️       | `media` An image URL to show on the post.                                                                                                                                                                              |
| Plurk       |      ❌ ️      |      ✔️       |                                                                                                                                                                                                                        |
| Pocket      |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| QZone       |       ✔️       |      ✔️       | `summary` A summary of the post.                                                                                                                                                                                       |
| Reddit      |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Renren      |       ✔️       |      ✔️       | `description` A description of the post. <br> `srcUrl` The original URL of the post.                                                                                                                                   |
| Skype       |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Telegram    |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Threema     |       ❌       |      ✔️       | `id` The id of the person to send the post.                                                                                                                                                                            |
| Tumblr      |       ✔️       |      ✔️       | `caption` A caption to add to the post. <br> `tags` A comma seperated list of tags to apply to the post.                                                                                                               |
| Twitter     |       ✔️       |      ✔️       | `hastags` A comma seperated list of hash tags to apply to the tweet. <br> `via` The tweeter to give credit to.                                                                                                         |
| Viber       |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| VKontakte   |       ✔️       |      ✔️       | `description` A description of the post. <br> `image` An image URL to show on the post.                                                                                                                                |
| Weibo       |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| WhatsApp    |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |
| Xing        |       ❌       |      ✔️       |                                                                                                                                                                                                                        |
| YahooMail   |       ✔️       |      ✔️       |                                                                                                                                                                                                                        |

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

> [!NOTE]
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
