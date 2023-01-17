<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32)->commnet('名前');
            $table->string('email', 255)->commnet('メールアドレス');
            $table->string('message', 1024)->commnet('本文');
            //$table->string('ip_addr', 39)->commnet('IPアドレス');
            //$table->bigInteger('created_at')->nullable()->commnet('作成者ID');
            //$table->timestamp('created_at')->nullable()->commnet('作成日');
            //$table->bigInteger('updated_at')->nullable()->commnet('削除者ID');
            //$table->timestamp('deleted_at')->nullable()->commnet('削除者ID');
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->collation = 'utf8mb4_bin';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
}
