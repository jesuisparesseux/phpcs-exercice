<?php

/**
 * MesDates.php - A utility class for date manipulation.
 *
 * This file provides a class to handle date-related utilities.
 *
 * @category   Date
 * @package    PhpcsExercice
 * @author     jesuisparesseux <deranfangnachdemende@gmail.com>
 * @license    MIT https://opensource.org/licenses/MIT
 * @link       https://github.com/jesuisparesseux/phpcs-exercice
 * @phpversion 8.4
 */
namespace Jesuisparesseux\PhpcsExercice;

/**
 * Class MesDates
 *
 * Provides utilities for date manipulation.
 *
 * @category   Date
 * @package    PhpcsExercice
 * @author     jesuisparesseux <deranfangnachdemende@gmail.com>
 * @license    MIT https://opensource.org/licenses/MIT
 * @link       https://github.com/jesuisparesseux/phpcs-exercice
 */
class MesDates
{
    /**
     * Returns tomorrow's date as a JSON object.
     *
     * @return string JSON encoded string with tomorrow's date
     */
    public function demain(): string
    {
        $tomorrow = date('d-m-Y', strtotime('+1 day'));
        return json_encode(['demain' => $tomorrow]);
    }
}
