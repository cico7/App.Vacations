<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroups1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups1', function (Blueprint $table) {
            $table->id();
            $table->string('group_name',50);
            $table->boolean('can_approve_request');
            $table->boolean('can_enter_request');
            $table->boolean('can_add_free_days');
            $table->boolean('can_add_new_user');
            $table->boolean('can_change_group_rights');
            $table->string('group_description',1020)->nullable();
            /*created_at updated_at*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups1');
    }
}
