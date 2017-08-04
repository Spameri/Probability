<?php

namespace Spameri\Probability;


interface IChance
{
	public function roll() : bool;
}