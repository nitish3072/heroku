<?php
if (isset($_ENV["DATABASE_URL"]))
{
    $db = parse_url($_ENV["DATABASE_URL"]);
    define('DB_NAME', trim($db["path"],"/"));
    define('DB_USER', $db["user"]);
    define('DB_PASSWORD', $db["pass"]);
    define('DB_HOST', $db["host"]);
}
else
{
    die("Can't determine database settings from DATABASE_URL\n");
}
