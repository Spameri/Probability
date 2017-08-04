<?php

namespace Spameri\Probability\Engine;


class Engine
{

	/**
	 * @var \Spameri\Probability\IChance
	 */
	private $chance;


	public function __construct(
		\Spameri\Probability\IChance $chance
	)
	{
		$this->chance = $chance;
	}


	public function random() : bool
	{
		return $this->chance->roll();
	}
}
