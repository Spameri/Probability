<?php

namespace Spameri\Probability;


class Options
{

	private $pool;

	private $chance;


	public function __construct(
		int $pool,
		float $chance
	)
	{
		if ($pool < 1) {
			throw new \InvalidArgumentException('Numbers pool is smaller than 1.');
		}
		if ($chance < 0 || $chance > 100) {
			throw new \InvalidArgumentException('Chance must be in range 0-100.');
		}

		$this->pool = $pool;
		$this->chance = $chance;
	}


	public function getPool()
	{
		return $this->pool;
	}


	public function getChance()
	{
		return $this->chance;
	}
}