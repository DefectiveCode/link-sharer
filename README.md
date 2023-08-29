<p align="center"><img width="500" src="./docs/logo.gif" alt="Defective Code Logo"></p>

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
<x-link-sharer service="twitter" text="Share me!" url="https://www.defectivecode.com" class="p-4">
    <!-- Your HTML code here to control the look and feel of the share button -->
    <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Click me!</span>
</x-link-sharer>
```

# Documentation

You may read the [documentation on our website](https://www.defectivecode.com/packages/link-sharer).

# Support Guidelines

Thanks for choosing our open source package! Please take a moment to check out these support guidelines. They'll help you get the most out of our project.

## Community Driven Support

Our open-source project is fueled by our awesome community. If you have questions or need assistance, StackOverflow and other online resources are your best bets.

## Bugs, and Feature Prioritization

The reality of managing an open-source project means we can't address every reported bug or feature request immediately. We prioritize bug fixes in the following order:

### 1. Bugs Affecting Our Paid Products

Bugs that impact our paid products will always be our top priority. In some cases, we may only address bugs that affect us directly.

### 2. Community Pull Requests

If you've identified a bug and have a solution, please submit a pull request. After issues affecting our products, we give the next highest priority to these community-driven fixes. Once reviewed and approved, we'll merge your solution and credit your contribution.

### 3. Financial Support

For bugs that don't fall into the above categories but need urgent attention, you have the option to financially support their resolution. Using the order form linked with every open issue, you can contribute to the bug's resolution. We prioritize such bugs based on the dollar amount of support received.

## 3. Community Contributions

Open source thrives when its community is active. Even if you're not fixing bugs, consider contributing through code improvements, documentation updates, tutorials, or by assisting others in community channels. We highly encourage everyone, as a community, to help support open-source work.

_To reiterate, DefectiveCode will prioritize bugs based on how they impact our paid products, community pull requests, and the financial support received for individual issues._

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
