<?php

if (!function_exists('convert_microtime'))
{
    function convert_microtime($microtime): string
    {
        $hours = (int)
            ($minutes = (int)
                ($seconds = (int)
                    ($milliseconds = (int)
                    ($microtime * 1000))
                    / 1000)
                / 60)
            / 60;

        $minutes = $minutes % 60;
        $seconds = $seconds % 60;
        $milliseconds = $milliseconds % 1000;

        if ($hours !== 0) {
            return "Elapsed Time: {$hours} hour(s) {$minutes} minute(s) {$seconds} second(s) {$milliseconds} millisecond(s)";
        }

        if ($minutes !== 0) {
            return "Elapsed Time: {$minutes} minute(s) {$seconds} second(s) {$milliseconds} millisecond(s)";
        }

        if ($seconds !== 0) {
            return "Elapsed Time: {$seconds} second(s) {$milliseconds} millisecond(s)";
        }

        return "Elapsed Time: {$milliseconds} millisecond(s)";
    }
}
