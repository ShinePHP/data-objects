<?php

namespace ShinePHP\DataObjects;

abstract class BaseDataObject {

	public function __construct(array $data) {
		$this->populate($data);
	}

	public function toArray(): array {
		return \get_object_vars($this);
	}

	private function populate(array $data) {
		if (empty($data)) {
			throw new \InvalidArgumentException('The data provided must not be empty');
		}
		foreach ($data as $key => $value) {
			if (\property_exists($this, $key)) {
				$this->{$key} = $value;
			}
		}
	}

}