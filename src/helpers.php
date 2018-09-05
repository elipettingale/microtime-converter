<?php

if (!function_exists('convert_microtime'))
{
    function convert_microtime($microtime): \EliPett\MicrotimeConverter\Services\MicroTime
    {
        return new \EliPett\MicrotimeConverter\Services\MicroTime($microtime);
    }
}
