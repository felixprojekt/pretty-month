<?
/**
 * @param $month_id 01-12 or 1-12
*/
function pretty_month($month_id, $inflection = false) {

	$month = intval($month_id);

	if($inflection) {
		$months = ["ledna", "února", "března", "dubna", "května", "června", "července", "srpna", "září", "října", "listopadu", "prosince"];
	} else {
		$months = ["leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"];
	}
	

	return $months[$month - 1];
}

?>