<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        $names = [
            'Administrador',
            'Vendedor',
            'Cliente'
        ];

        foreach ($names as $name){
            $state = new App\Model\Role();
            $state->name = $name;
            $state->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
