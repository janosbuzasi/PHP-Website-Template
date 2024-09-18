# PHP Website Template

This is a PHP-based website template that provides a simple structure with dynamic header, footer, and body sections. The project uses PHP includes to reuse the header and footer across multiple pages, making it easy to maintain and extend.

## Project Overview

- **PHP-based Project**: Dynamic header and footer that are reused across multiple pages.
- **Burger Menu**: The header menu includes a burger menu that can be expanded on smaller screens.
- **Responsive Design**: Flexbox-based layout for flexible display on various devices.

## File Structure

```bash
/
├── index.php          # Homepage
├── about_us.php       # "About Us" page
├── contact.php        # "Contact" page
├── header.php         # Reusable header
├── footer.php         # Reusable footer
├── style.css          # CSS file for styling
└── README.md          # This README file
```

## Website Structure

The website consists of three main pages:

1. **index.php** (Homepage):
    - Welcomes users with introductory text.
    - Contains the header with navigation and a dynamic page title.
    - The body contains a welcome message.
    - The footer shows dynamic copyright with the current year.

2. **about_us.php** ("About Us" page):
    - Introduces the company or services.
    - Uses the same header and footer as the homepage.

3. **contact.php** ("Contact" page):
    - Provides contact information, including email and phone number.
    - Also uses the reusable header and footer.

### Dynamic Header and Footer

- **Header (`header.php`)**: The header contains the navigation menu and a dynamic page title. The title is set on each page using the `$title` variable.
- **Footer (`footer.php`)**: The footer is included on all pages and shows dynamic copyright information with the year.

### Styling (CSS)

All pages use the central `style.css` file. The main styles include:
- White background for the body and content.
- Black text for readability.
- The header and footer have a dark background for contrast.
- The burger menu is positioned in the bottom-right corner of the header.

### License

This project is licensed under the MIT License. See the full license text below:

```
MIT License

Copyright (c) 2024

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

## Installation

1. Upload all files to your server's web directory.
2. Ensure that your server supports PHP.
3. Access the `index.php` file via your web browser.
