<?php

include "../../src/IChance.php";
include "../../src/Chance/Random.php";
include "../../src/Engine.php";
include "../../src/Options.php";

$engine = new \Spameri\Probability\Engine\Engine(
	new \Spameri\Probability\Chance\Random(new \Spameri\Probability\Options(10, 50))
);

$success = $fail = 0;
for ($i = 0; $i < 1000; $i++) {
	$randomResult = $engine->random();
	if ($randomResult) {
		$success++;
	} else {
		$fail++;
	}
}

var_dump($success);
var_dump($fail);
