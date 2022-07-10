<?php

$plaintext = 'GPB{AES256CTR}';
$key='12345678';
$method = 'aes-256-ctr';

$iv = hex2bin('25d55ad283aa400af464c76d713c07ad');

$encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
$decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);

echo 'KEY=???'."\n";
echo 'IV=' . bin2hex($iv) . "\n";
echo 'cipher=' . $method . "\n";
echo 'encrypted_flag=' . $encrypted . "\n";
echo 'decrypted_flag=???' ."\n\n";
