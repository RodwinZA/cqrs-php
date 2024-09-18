<?php

namespace cqrs\Repository;

use cqrs\Entity\User;

class UserRepository
{
	private array $users = [];

	public function save(User $user): void
	{
		$this->users[] = $user;
	}

	public function findById($id)
	{
		return $this->users[$id] ?? NULL;
	}
}