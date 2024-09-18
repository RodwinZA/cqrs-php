<?php

namespace cqrs\Command;

class CreateUserCommand implements CommandInterface
{
	private $username;
	private $email;

	public function __construct(string $username, string $email)
	{
		$this->username = $username;
		$this->email = $email;
	}


	public function getUsername(): string
	{
		return $this->username;
	}

	public function getEmail(): string
	{
		return $this->email;
	}



	public function execute()
	{
		// TODO: Logic for executing the command.
	}
}