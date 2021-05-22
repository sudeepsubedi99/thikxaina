<?php

function format($amount)
{
    return preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amount);
}

function money($amount)
{
    return "Rs. " . format($amount);
}
