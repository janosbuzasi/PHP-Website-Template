
# PHP Website Template with Dynamic Style Switching

This is a PHP-based website template that allows dynamic styling and includes reusable components like the header and footer. The project also supports switching styles using cookies to remember the user's preference.

## Project Overview

- **PHP-based Project**: Includes dynamic header and footer components that are reused across multiple pages.
- **Dynamic Style Switching**: Users can switch between different styles (e.g., classic, yellow) which are stored in cookies to persist the style across sessions.
- **Responsive Design**: The website uses Flexbox for a flexible layout across devices.

## File Structure

```bash
/
├── index.php          # Homepage
├── about_us.php       # "About Us" page
├── contact.php        # "Contact" page
├── change_style.php   # Page to switch styles
├── header.php         # Reusable header
├── footer.php         # Reusable footer
├── styles/            # Directory for all styles
│   ├── style.css          # Default CSS file
│   ├── classic_style.css  # CSS file for classic style
│   └── yellow_style.css   # CSS file for yellow style
└── README.md          # This README file
```

## Website Structure

The website consists of four main pages:

1. **index.php** (Homepage):
    - Displays a welcome message.
    - Contains the dynamic header with navigation and the current page title.
    - Includes the reusable footer.

2. **about_us.php** ("About Us" page):
    - Introduces the website or company and uses the domain name dynamically.
    - Uses the same header and footer as the homepage.

3. **contact.php** ("Contact" page):
    - Provides contact information and uses the reusable header and footer.

4. **change_style.php** (Change Style):
    - Allows users to switch between different styles (e.g., classic, yellow, default).
    - Sets the chosen style in a cookie and refreshes the page to apply the new style.

### Dynamic Header and Footer

- **Header (`header.php`)**: The header contains the navigation menu and a dynamic page title. The title is set on each page using the `$title` variable. If the `$title` variable is not set, it displays the domain name.
- **Footer (`footer.php`)**: The footer is included on all pages and shows dynamic copyright information with the year and domain.

### Dynamic Style Switching
- **Style Selection**: The user can select a style from the change_style.php page. The selected style is saved in a cookie, which is used to load the corresponding CSS file across all pages.
- **Auto-Refresh**: After selecting a style, the page automatically refreshes to apply the new style.

### Styling (CSS)
All styles are stored in the styles directory, with the following options:

- **Default (`styles/style.css`)**: The main stylesheet with basic styling.
- **Classic (`styles/classic_style.css`)**: A classic-style layout with neutral colors.
- **Yellow (`styles/yellow_style.css`)**: A bright yellow-themed layout.

### License

This project is licensed under the MIT License. See the full license text below:

```
MIT License

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
4. Use the `change_style.php` page to switch between different styles.

## Contact

For questions or feedback, please contact the project maintainer.
