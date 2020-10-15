<?php

/**
 * @author Cristian Quintero García <cristian181199@gmail.com>
 * @copyright Copyright {c} 2020 Cristian Quintero
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * esIsograma
 *
 * @param  string $s
 * @return bool
 */
function esIsograma($s): bool
{
    $s = mb_ereg_replace('[- ]', '', $s = mb_strtolower($s));

    return count(array_unique(mb_str_split($s))) == mb_strlen($s);
}
