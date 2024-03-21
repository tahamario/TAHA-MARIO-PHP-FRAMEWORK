<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['auth'] ?? false) {
            header('location:/');
            exit();
        }
    }
}
