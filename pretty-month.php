<?
/**
 * @param $month_id 01-12 or 1-12
*/
function pretty_month($month_id) {

	$month = intval($month_id);

	$months = ["ledna", "února", "března", "dubna", "května", "června", "července", "srpna", "září", "října", "listopadu", "prosince"];

	return $months[$month_id - 1];
}

?>