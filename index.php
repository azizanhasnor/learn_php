<?php
	include 'config.php';
	include 'date_parser.php';

	/**
	*
	*/
	class IcParser
	{
		function __construct($ic)
		{
			$this->ic  = $ic;
			$this->date_born = date_create_from_format('ymd', IcDateParser::getDateString($this->ic));
		}

		/**
		 * You may pass an optional return value either ['year', 'day']
		 */
		function getAge($option = nil) {
			$current_date  = new DateTime();
			$diff = $current_date->diff($this->date_born);

			$result = nil;

			switch ($option) {
				case 'years':
					$result = $diff->y;
					break;
				case 'days':
					$result = $diff->days;
					break;
				default:
					$result = $diff->y;
					break;
			}

			return $result;
		}
	}

	$ic = new IcParser('891108-10-5107');
	echo $ic->getAge();
?>
