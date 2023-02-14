<?php

function encryption($key)
{

    $ciphering = "AES-128-CTR";
  
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    $encryption_iv = '2001028006150512';

    $encryption_key = "groupno8";

    $encryption = openssl_encrypt($key, $ciphering, $encryption_key, $options, $encryption_iv);
    return $encryption;
};

function decryption($key)
{

    $ciphering = "AES-128-CTR";

    $decryption_iv = '2001028006150512';
    $options = 0;
   
    $decryption_key = "groupno8";

    
    $decryption = openssl_decrypt(
        $key,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );

    return $decryption;
}
