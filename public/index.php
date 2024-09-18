<?php

require "../vendor/autoload.php";

use cqrs\Command\CreateUserCommand;
use cqrs\Handler\CreateUserHandler;
use cqrs\Query\GetUserQuery;
use cqrs\Repository\UserRepository;

$userRepository = new UserRepository();

// Command: Create a new user
$createUserCommand = new CreateUserCommand('JaneDoe', 'jane@example.com');
$createUserHandler = new CreateUserHandler($userRepository);
$createUserHandler->handle($createUserCommand);

// Query: Fetch the created user
$getUserQuery = new GetUserQuery(0, $userRepository); // assume ID of 0
$user = $getUserQuery->execute();

if ($user) {
	echo "User found: " . $user->getUsername() . " (" . $user->getEmail() . ")";
} else {
	echo "User not found.";
}