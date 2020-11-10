<?php


namespace Site;


class Viewer
{
    public function render(string $view, array $data = [])
    {
        include VIEWS_DIR . BASE_VIEW;
    }
}
