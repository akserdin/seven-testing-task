<?php


namespace Site;


class Helper
{
    public function getSaveString(string $input)
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
}
