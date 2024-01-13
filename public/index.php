<?php

use adamcameron\lid\Service\GreetingService;

require_once dirname(__DIR__).'/vendor/autoload.php';

$greetingService = new GreetingService();

echo $greetingService->getGreeting();
