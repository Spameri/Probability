<?php

namespace Spameri\Probability\Chance;


class Probability implements \Spameri\Probability\IChance
{

	/**
	 * @var \Spameri\Probability\Options
	 */
	private $options;

	/**
	 * @var array
	 */
	private $randomPool;


	public function __construct(
		\Spameri\Probability\Options $options
	)
	{
		$this->options = $options;

		for ($i = 0; $i < $this->options->getPool(); $i++) {
			$this->randomPool[$i] = $i;
		}
	}


	public function roll() : bool
	{
		$chance = $this->options->getPool() * ($this->options->getChance() / 100);

		if ($this->randomPool) {
			$number = array_rand($this->randomPool);
			unset($this->randomPool[$number]);

		} else {
			throw new \Spameri\Probability\Exception\ChancesUsed('All rolls in pool used.');
		}

		return $number < $chance;
	}
}
