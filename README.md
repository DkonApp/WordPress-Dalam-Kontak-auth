# Dalam Kontak Authentication Module for WordPress

## Overview

The **Dalam Kontak Authentication Module** is a simple WordPress plugin that allows you to authenticate users via the Dalam Kontak API. This module retrieves the `accessToken` and `accountId`, which can be utilized in your project for further interactions with the Dalam Kontak platform.

## Features

- User-friendly login form
- Secure authentication via the Dalam Kontak API
- Retrieves and stores `accessToken` and `accountId` for further use
- Easy integration with WordPress using shortcodes

## Installation

1. **Download the Plugin:**
   - Clone this repository or download the ZIP file.

   ```bash
   git clone https://github.com/yourusername/dalam-kontak-auth.git
   ```

2. **Upload the Plugin:**
   - Upload the `dalam-kontak-auth` folder to the `/wp-content/plugins/` directory of your WordPress installation.

3. **Activate the Plugin:**
   - Go to the WordPress admin panel, navigate to the "Plugins" section, and activate the **Dalam Kontak Auth** plugin.

## Usage

To display the login form on your site, use the following shortcode in any post or page:

```plaintext
[dalam_kontak_login]
```

Upon successful login, the module will retrieve the `accessToken` and `accountId`, which will be stored in the browser's local storage for further use in your project.

## Customization

You can customize the appearance of the login form by modifying the CSS file located in the `css` directory of the plugin.

## JavaScript Functionality

The JavaScript file (`auth.js`) handles the login process by sending user credentials to the Dalam Kontak API. It manages the response and stores the `accessToken` and `accountId` in the browser's local storage for later use in your application.

## Contributing

Contributions are welcome! If you have suggestions for improvements or find bugs, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Dalam Kontak API](https://dkon.app/dev) for providing the authentication service.
- WordPress community for their continuous support and development.

## Contact

For any inquiries or support, please reach out to https://dkon.app/dev.
```

### Key Changes:
- Clarified that the module retrieves only `accessToken` and `accountId`.
- Emphasized that these values can be used in your project after retrieval.

Feel free to adjust any sections further to better fit your project's needs!
