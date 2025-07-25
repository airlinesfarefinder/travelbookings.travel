<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(877) 694-3693',
        'email_id' => 'info@travelbookings.travel',
        'address' => '110 Federal Street Boston, MA 02110',
        'domain_name' => 'travelbookings.travel',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
