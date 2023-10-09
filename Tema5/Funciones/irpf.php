<?php
        function salarioSinIRPF(int|float $salario) : float{
            $salarioFinal = 0;
            $tramo1 = (12450 * 0.19);
            $tramo2 = (20200 - 12450) * 0.24;
            $tramo3 = (35200 - 20200) * 0.3;
            $tramo4 = (60000 - 35200) * 0.37;
            $tramo5 = (300000 - 60000) * 0.45;

            if($salario < 12450){
                $salarioFinal = $salario - ($salario * 0.19);
            }else if($salario >= 12450 && $salario < 20200){
                $salarioFinal = $salario - $tramo1 - (($salario - 12450) * 0.24);
            }else if($salario >= 20200 && $salario < 35200){
                $salarioFinal = $salario - $tramo1 - $tramo2 - (($salario - 20200) * 0.3);
            }else if($salario >= 35200 && $salario < 60000){
                $salarioFinal = $salario - $tramo1 - $tramo2 - $tramo3 -  (($salario - 35200) * 0.37);
            }else if($salario >= 60000 && $salario < 300000){
                $salarioFinal = $salario - $tramo1 - $tramo2 - $tramo3 - $tramo4 - (($salario - 60000) * 0.45);
            }else{
                $salarioFinal = $salario - $tramo1 - $tramo2 - $tramo3 - $tramo4 - $tramo5 - (($salario - 300000) * 0.47);
            }
            return $salarioFinal;
        }
?>