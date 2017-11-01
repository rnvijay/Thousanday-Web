<?php

$router = $di->getRouter( false );

$router->addGet("/", ["controller" => "index", "action" => "index"]);
$router->addGet("/index/read", ["controller" => "index", "action" => "read"]);
$router->addGet("/explore", ["controller" => "explore", "action" => "index"]);
$router->addGet("/explore/read", ["controller" => "explore", "action" => "read"]);

$router->addGet("/user/:int", ["controller" => "user", "action" => "index", "params" => 1]);
$router->addGet("/user/read", ["controller" => "user", "action" => "read"]);
$router->addPost("/user/load", ["controller" => "user", "action" => "load"]);
$router->addGet("/setting", ["controller" => "setting", "action" => "index"]);
$router->addGet("/setting/read", ["controller" => "setting", "action" => "read"]);
$router->addPost("/setting/name", ["controller" => "setting", "action" => "name"]);
$router->addPost("/setting/about", ["controller" => "setting", "action" => "about"]);

$router->addGet("/pet/:int", ["controller" => "pet", "action" => "index", "params" => 1]);
$router->addGet("/pet/read", ["controller" => "pet", "action" => "read"]);
$router->addGet("/pet/load", ["controller" => "pet", "action" => "load"]);
$router->addPost("/pet/watch", ["controller" => "pet", "action" => "watch"]);
$router->addGet("/edit/:int", ["controller" => "edit", "action" => "index", "params" => 1]);
$router->addGet("/edit/read", ["controller" => "edit", "action" => "read"]);
$router->addPost("/edit/name", ["controller" => "edit", "action" => "name"]);
$router->addGet("/edit/search", ["controller" => "edit", "action" => "search"]);
$router->addPost("/edit/add", ["controller" => "edit", "action" => "add"]);
$router->addPost("/edit/remove", ["controller" => "edit", "action" => "remove"]);
$router->addPost("/edit/transfer", ["controller" => "edit", "action" => "transfer"]);
$router->addPost("/edit/end", ["controller" => "edit", "action" => "end"]);

$router->addGet("/add", ["controller" => "add", "action" => "index"]);

$router->addGet("/moment/:int", ["controller" => "moment", "action" => "index", "params" => 1]);
$router->addGet("/moment/read", ["controller" => "moment", "action" => "read"]);
$router->addPost("/moment/delete", ["controller" => "moment", "action" => "delete"]);
$router->addPost("/moment/like", ["controller" => "moment", "action" => "like"]);
$router->addPost("/moment/comment", ["controller" => "moment", "action" => "comment"]);
$router->addGet("/moment/load", ["controller" => "moment", "action" => "load"]);

$router->addGet("/request", ["controller" => "request", "action" => "index"]);
$router->addGet("/request/read", ["controller" => "request", "action" => "read"]);
$router->addPost("/request/accept", ["controller" => "request", "action" => "accept"]);
$router->addPost("/request/delete", ["controller" => "request", "action" => "delete"]);

$router->addPost("/account/google", ["controller" => "account", "action" => "google"]);
$router->addPost("/account/facebook", ["controller" => "account", "action" => "facebook"]);
$router->addPost("/account/logout", ["controller" => "account", "action" => "logout"]);
$router->addGet("/signup", ["controller" => "signup", "action" => "index"]);
$router->addGet("/terms", ["controller" => "terms", "action" => "index"]);

$router->addPost("/upload/pet", ["controller" => "upload", "action" => "pet"]);
$router->addPost("/upload/add", ["controller" => "upload", "action" => "add"]);
$router->addPost("/upload/moment", ["controller" => "upload", "action" => "moment"]);
$router->addPost("/upload/create", ["controller" => "upload", "action" => "create"]);
$router->addPost("/upload/user", ["controller" => "upload", "action" => "user"]);

$router->addGet("/watch", ["controller" => "watch", "action" => "index"]);
$router->addGet("/watch/read", ["controller" => "watch", "action" => "read"]);
$router->addPost("/watch/remove", ["controller" => "watch", "action" => "remove"]);
$router->addPost("/watch/add", ["controller" => "watch", "action" => "add"]);
$router->addPost("/watch/load", ["controller" => "watch", "action" => "load"]);

$router->addGet("/about", ["controller" => "about", "action" => "index"]);
$router->addGet("/react", ["controller" => "react", "action" => "index"]);

$router->addGet("/admin", ["controller" => "admin", "action" => "index"]);
$router->addGet("/admin/permission", ["controller" => "admin", "action" => "permission"]);
$router->addGet("/admin/list/:params", ["controller" => "admin", "action" => "list", "params" => 1]);
$router->addGet("/test", ["controller" => "test", "action" => "index"]);
//$router->addPost("/test/read", ["controller" => "test", "action" => "read"]);

$router->addGet("/error/page403", ["controller" => "error", "action" => "page403"]);
$router->addGet("/error/page404", ["controller" => "error", "action" => "page404"]);
$router->addGet("/error/page500", ["controller" => "error", "action" => "page500"]);
$router->notFound(["controller" => "error", "action" => "page404"]);



$router->handle();