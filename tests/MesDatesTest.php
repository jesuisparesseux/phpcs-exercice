<?php

namespace Jesuisparesseux\PhpcsExercice\Tests;

use Jesuisparesseux\PhpcsExercice\MesDates;
use PHPUnit\Framework\TestCase;

class MesDatesTest extends TestCase
{
    public function testDemainReturnsJson()
    {
        $mesDates = new MesDates();
        $result = $mesDates->demain();
        $this->assertJson($result);
    }

    public function testDemainReturnsTomorrowDate()
    {
        $mesDates = new MesDates();
        $result = $mesDates->demain();
        $data = json_decode($result, true);
        $tomorrow = date('d-m-Y', strtotime('+1 day'));
        $this->assertEquals($tomorrow, $data['demain']);
    }
}