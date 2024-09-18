<?php

namespace cqrs\Handler;

use cqrs\Command\CreateUserCommand;
use cqrs\Entity\User;
use cqrs\Repository\UserRepository;

class CreateUserHandler
{
	private UserRepository $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function handle(CreateUserCommand $command): void
	{
		$user = new User($command->getUsername(), $command->getEmail());
		$this->userRepository->save($user);
	}
}