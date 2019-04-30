<?php

function from($date)
{
    $date_copy = clone $date;
    $seconds = 10**9;
    return $date_copy->modify("+ {$seconds} seconds");
}