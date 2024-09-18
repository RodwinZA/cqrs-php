<?php

namespace cqrs\Query;

interface QueryInterface
{
	public function execute();
}