<?php

/**
 * MesDatesTest.php - Unit tests for the MesDates class.
 *
 * PHP version 8.4.5
 * 
 * This file contains unit tests to verify the functionality of the MesDates class.
 *
 * @category Tests
 * @package  PhpcsExercice
 * @author   jesuisparesseux <deranfangnachdemende@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/jesuisparesseux/phpcs-exercice
 * @requires PHP 8.4
 */
namespace Jesuisparesseux\PhpcsExercice\Tests;

use Jesuisparesseux\PhpcsExercice\MesDates;
use PHPUnit\Framework\TestCase;

/**
 * Class MesDatesTest
 *
 * Unit tests for the MesDates class.
 *
 * @category Tests
 * @package  PhpcsExercice
 * @author   jesuisparesseux <deranfangnachdemende@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/jesuisparesseux/phpcs-exercice
 */
class MesDatesTest extends TestCase
{
    /**
     * Tests that demain() returns a valid JSON string.
     *
     * @return void
     */
    public function testDemainReturnsJson()
    {
        $mesDates = new MesDates();
        $result = $mesDates->demain();
        $this->assertJson($result);
    }

    /**
     * Tests that demain() returns tomorrow's date in JSON format.
     *
     * @return void
     */
    public function testDemainReturnsTomorrowDate()
    {
        $mesDates = new MesDates();
        $result = $mesDates->demain();
        $data = json_decode($result, true);
        $tomorrow = date('d-m-Y', strtotime('+1 day'));
        $this->assertEquals($tomorrow, $data['demain']);
    }
}