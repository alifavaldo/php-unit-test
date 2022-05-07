<?php 

namespace Alifavaldo\Test;

class Math{
    public function sum(array $value)
    {
        $total = 0;
        foreach ($value as $value){
            $total += $value;
        }
        return $total;
    }
}