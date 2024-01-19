
# Native Cross-Platform AES Encryption/Decryption in JS and PHP

This project provides a simple solution for encrypting and decrypting strings using AES-CBC with a 256-bit key size. The solution is interoperable between JavaScript (for browser environments) and PHP, allowing secure encryption and decryption across different platforms. It requires no libraries.

## Features

- AES-256-CBC encryption and decryption.
- SHA-256 hashing for password-based key derivation.
- Random IV (initialization vector) generation for each encryption.
- Encoding of ciphertext in Base64 for easy storage and transmission.
- Hexadecimal encoding of IV for easy concatenation with ciphertext.
- 100% native and no libraries

## Requirements

- A modern web browser with support for Web Crypto API. See [here](https://developer.mozilla.org/en-US/docs/Web/API/Web_Crypto_API) for a support matrix

## Getting Started

To use these encryption and decryption functions, simply include `crypt.js` in your JavaScript project or `crypt.php` in your PHP project.

### JavaScript Usage

Include the `crypt.js` file in your HTML or JavaScript project.

```html
<script src="path/to/crypt.js"></script>
```

#### Encrypting a String

```javascript
const plaintext = "Hello, world!";
const password = "strongpassword";

encrypt(plaintext, password).then(encryptedText => {
    console.log(encryptedText);
});
```

#### Decrypting a String

```javascript
const encryptedText = "YourEncryptedStringHere";
const password = "strongpassword";

decrypt(encryptedText, password).then(plaintext => {
    console.log(plaintext);
});
```

### PHP Usage

Include the `crypt.php` file in your PHP project.

#### Encrypting a String

```php
require 'path/to/crypt.php';

$plaintext = "Hello, world!";
$password = "strongpassword";

$encryptedText = encrypt($plaintext, $password);
echo $encryptedText;
```

#### Decrypting a String

```php
require 'path/to/crypt.php';

$encryptedText = "YourEncryptedStringHere";
$password = "strongpassword";

$plaintext = decrypt($encryptedText, $password);
echo $plaintext;
```

## Security Notes

- Always use a secure, randomly generated password.
- Do not hardcode passwords within your application code.
- I strongly recommend obfuscation for your crypt.js as it will be readable on the client side
- Store and manage passwords and keys securely, using best practices for your environment.
- This code has not been audited for security compliance and is intended for educational purposes.

## Contributing

Contributions are welcome! If you have a suggestion or improvement, please feel free to fork the repository and submit a pull request.

## License

This project is open-sourced under the MIT License. See the LICENSE file for more information.