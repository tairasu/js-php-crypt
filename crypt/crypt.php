<?php

function encrypt($plaintext, $password) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $key = hash('sha256', $password, true);
    $ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    return bin2hex($iv) . base64_encode($ciphertext);
}

function decrypt($ciphertext, $password) {
    $iv = hex2bin(substr($ciphertext, 0, 32));
    $ciphertext = base64_decode(substr($ciphertext, 32));
    $key = hash('sha256', $password, true);
    return openssl_decrypt($ciphertext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
}