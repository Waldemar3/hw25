<?php


namespace App;


class Generator
{
    public static function xrange($start, $limit, $step = 1){
        if ($start <= $limit) {
            if ($step <= 0) {
                throw new \LogicException('Шаг должен быть положительным');
            }

            for ($i = $start; $i <= $limit; $i += $step) {
                yield $i;
            }
        } else {
            if ($step >= 0) {
                throw new \LogicException('Шаг должен быть отрицательным');
            }

            for ($i = $start; $i >= $limit; $i += $step) {
                yield $i;
            }
        }
    }

}