<?php

include "../../src/IChance.php";
include "../../src/Chance/Probability.php";
include "../../src/Engine.php";
include "../../src/Options.php";
include "../../src/Exception/ChancesUsed.php";

$pool = 1000;
$engine = new \Spameri\Probability\Engine\Engine(
	new \Spameri\Probability\Chance\Probability(new \Spameri\Probability\Options($pool, 50))
);

$success = $fail = 0;
for ($i = 0; $i < $pool; $i++) {
	$randomResult = $engine->random();
	if ($randomResult) {
		$success++;
		echo "TRUE \n";

	} else {
		$fail++;
		echo "FALSE \n";
	}
}

var_dump($success);
var_dump($fail);
