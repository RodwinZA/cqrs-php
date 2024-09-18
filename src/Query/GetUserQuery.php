<?php

namespace cqrs\Query;

use cqrs\Repository\UserRepository;

class GetUserQuery implements QueryInterface
{
	private int $userId;
	private UserRepository $userRepository;

	public function __construct(int $userId, UserRepository $userRepository)
	{
		$this->userId = $userId;
		$this->userRepository = $userRepository;
	}

	public function execute()
	{
		return $this->userRepository->findById($this->userId);
	}
}