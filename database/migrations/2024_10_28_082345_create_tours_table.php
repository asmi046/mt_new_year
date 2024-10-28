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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название тура');
            $table->string('slug')->comment('Слаг');
            $table->string('img', 500)->nullable()->comment('Изображение');
            $table->integer('deycount')->default(1)->comment('Количество дней');
            $table->date('start_data')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата поездки');
            $table->mediumText('top_description')->nullable()->comment('Верхнее описание');
            $table->mediumText('program')->nullable()->comment('Программа тура');
            $table->mediumText('in_price')->nullable()->comment('Входит в стоимость');
            $table->mediumText('out_price')->nullable()->comment('За отдельную плату');
            $table->json('galery');
            $table->json('top_galery');
            $table->json('prices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
