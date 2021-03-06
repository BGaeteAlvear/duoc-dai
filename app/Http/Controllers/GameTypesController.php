<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CrudHelper\ControllerCrud;
use App\Model\GameType;

class GameTypesController extends ControllerCrud
{
    public function __construct()
    {
        parent::__construct(GameType::class);
        parent::setIndexPage('sections.config.game-types');
        //validate store
        parent::setValidationStore([
            'name' => 'required|max:50|min:1'
        ]);
        //validate update
        parent::setValidationUpdate([
            'name' => 'required|max:50|min:1'
        ]);
    }

}
