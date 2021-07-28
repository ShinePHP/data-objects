<?php

namespace ShinePHPTest\DataObjects;
use PHPUnit\Framework\TestCase;
use ShinePHPTest\TestDataObjects\BaseTestDataObject;

final class BaseDataObjectTest extends TestCase {

	public function testCreationOfBasicDataObject(): void {
		$testDataObject = new BaseTestDataObject(['id' => 123]);
		$this->assertEquals($testDataObject->id, 123);
	}

	public function testCannotCreateEmptyDataObject(): void {
		$this->expectException(\InvalidArgumentException::class);
		new BaseTestDataObject([]);
	}

	public function testCanCreateDataObjectWithExtraData(): void {
		$testDataObject = new BaseTestDataObject(['id' => 123, 'name' => 'Adam McGurk']);
		$this->assertEquals($testDataObject->id, 123);
	}

}