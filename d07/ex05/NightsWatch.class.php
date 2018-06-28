<?php
class NightsWatch implements IFighter {
	private $fighters = array();
	public function recruit($name) {
		$this->fighters[] = $name;
	}
	public function fight() {
		foreach($this->fighters as $fighter) {
			if (method_exists(get_class($fighter), 'fight'))
				$fighter->fight();
		}
	}
}
?>
