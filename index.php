<?php

// ! replace the recipient email address here
mail(
    "one_of_your_addresses@domain.com", 
    "test subject", 
    "<p style='color:red;'>it works</p>", 
    "MIME-Version: 1.0" . "\r\n". "Content-type: text/html; charset=utf8" . "\r\n"
);

echo "email sent";