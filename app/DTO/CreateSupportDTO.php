<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupport;

class CreateSupportDTO{

    public function __construct(

        public string $name,
        public int $idade,
        public int $latitude,
        public int $longitude,

    ){}

    public static function makeFromRequest(StoreUpdateSupport $request):self{

        return new self(
            $request->name,
            $request->idade,
            $request->latitude,
            $request->longitude,
        );
    }
}


?>
