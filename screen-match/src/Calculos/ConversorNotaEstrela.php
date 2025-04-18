<?php

namespace ScreenMatch\Calculos;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;
use Throwable;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();
    
            return round($nota) / 2;
        } catch (DivisionByZeroError) {
            return 0;
        } catch (ArgumentCountError $e) {
            echo $e->getMessage();
            return 0;
        } catch (Throwable) {
            return 0;
        }
    }
}
