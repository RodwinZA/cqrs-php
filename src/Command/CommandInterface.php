<?php

namespace cqrs\Command;

interface CommandInterface
{
	public function execute();
}