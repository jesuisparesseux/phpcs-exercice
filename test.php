<?php
/**
 * Fichier de test pour afficher la date de demain.
 *
 * @category Test
 * @package  PhpcsExercice
 * @author   Jesuisparesseux <jesuisparesseux@example.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://example.com
 */
require_once "vendor/autoload.php";

$objDate = new \Jesuisparesseux\PhpcsExercice\MesDates();
echo $objDate->demain();
