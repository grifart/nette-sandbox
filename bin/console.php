#!/usr/bin/env php
<?php

$container = require __DIR__ . "/../bootstrap.php";
$container->getByType(\Symfony\Component\Console\Application::class)->run();
