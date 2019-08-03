<?php
	$a = [
			['key1' => 940, 'key2' => 'blah'],
			['key1' => 23, 'key2' => 'this'],
			['key1' => 894, 'key2' => 'that']
		];

	function asc_number_sort($x, $y)
	{
		if ($x['key1'] > $y['key1']) {
			return true;
		} elseif ($x['key1'] < $y['key1']) {
			return false;
		} else {
			return 0;
		}
	}

	function string_sort($x, $y)
	{
		return strcasecmp($x['key2'], $y['key2']);
	}

	//$b = usort($a, 'asc_number_sort');
	usort($a, 'string_sort');
	//print_r($b.'\n');
	print_r($a);