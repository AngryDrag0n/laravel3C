<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupport;

class UpdateSupportDTO{

    public function __construct(

        public string $id,
        public int $latitude,
        public int $longitude,
        public string $inventario

        ){}

        public static function makeFromRequest(StoreUpdateSupport $request){
            return new self(

                $request->id,
                $request->latitude,
                $request->longitude,
                $request->inventario
            );
        }
    }


?>
