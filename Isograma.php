<?php

/**
 * @author Cristian Quintero García
 * @copyright Copyright {c} 2020 Cristian Quintero
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * esIsograma
 *
 * @param  mixed $s
 * @return bool
 */
function esIsograma($s): bool
{
    $s = str_replace(['-', ' '], '', $s);

    $s = strtolower($s);

    return count(array_unique(mb_str_split($s, 1))) == mb_strlen($s);
}
