<?php
 namespace App\Traits;

 trait ModelHasPositionTrait
 {
     public function getNextPosition(): int
     {
         return intval($this->model()->query()->max('position')) + 1;
     }
 }
