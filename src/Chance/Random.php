<?php

namespace Spameri\Probability\Chance;


class Random implements \Spameri\Probability\IChance
{

	/**
	 * @var \Spameri\Probability\Options
	 */
	private $options;


	public function __construct(
		\Spameri\Probability\Options $options
	)
	{
		$this->options = $options;
	}


	public function roll() : bool
	{
		$max = $this->options->getPool();
		$number = random_int(0, $max);

		$chance = $max * ($this->options->getChance() / 100);

		return $number < $chance;
	}
}
