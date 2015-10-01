<?php

namespace Deployment;

require __DIR__ . '/libs/Server.php';
require __DIR__ . '/libs/FtpServer.php';
require __DIR__ . '/libs/SshServer.php';
require __DIR__ . '/libs/Logger.php';
require __DIR__ . '/libs/Deployer.php';
require __DIR__ . '/libs/Preprocessor.php';
require __DIR__ . '/libs/CommandLine.php';
require __DIR__ . '/libs/CliRunner.php';
require __DIR__ . '/libs/exceptions.php';
require __DIR__ . '/../vendor/pclzip/pclzip/pclzip.lib.php';


$runner = new CliRunner;
die($runner->run());
