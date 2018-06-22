function pretty_month($month_id) {

	if($month_id > 9) {
		$month = ltrim($month_id, 1);
	} else {
		$month = $month_id;
	}

	$months = ["ledna", "února", "března", "dubna", "května", "června", "července", "srpna", "září", "října", "listopadu", "prosince"];

	return $months[$month_id - 1];
}