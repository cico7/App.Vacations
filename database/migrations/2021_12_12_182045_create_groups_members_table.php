<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_members', function (Blueprint $table) {
            $table->id();
            //nullable mora biti prije constrained, a onDelete() nakon constraind-a
            //onDelete ima dvije opcije-----1. je set null i ona trazi da mora biti nullable
            //                              2. je cascade i ona brise taj red
            $table->foreignId('user_id') ->constrained('users','id')    ->onDelete('cascade');
            $table->foreignId('group_id')->constrained('groups1','id')  ->onDelete('cascade');
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
        Schema::dropIfExists('groups_members');
    }
}
