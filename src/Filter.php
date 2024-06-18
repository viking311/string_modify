<?php
declare(strict_types=1);

namespace Viking311\StringModify;

class Filter
{
    public function spaceTrim(string $str): string
    {
        return trim($str, ' ');
    }
}