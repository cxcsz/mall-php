<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->char('uuid', 32)->comment('图片MD5')->index();
            $table->string('name', 300)->comment('图片名称,默认使用uuid')->default('');
            $table->string('path', 1000)->comment('图片地址')->default('');
            $table->unsignedBigInteger('size')->comment('图片大小')->default(0);
            $table->string('extension', 20)->comment('文件后缀')->index();
            $table->string('module', 300)->comment('所属模块,一般是第一次上传的模块')->default('默认')->index();
            $table->text('content')->comment('图片内容');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
