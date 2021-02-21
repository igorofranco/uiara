<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientContactsTable extends Migration{

    public function up(){
        Schema::create('client_contacts', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('comment');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('client_contacts');
    }
}
