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
        Schema::table('job_vacancy', function (Blueprint $table) {
            $table->string('title');
            $table->string('company');
            $table->date('last_day');
            $table->text('description');
            $table->string('image');
            //tabla es category, especificar tabla
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('salary_id')->constrained('salary')->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_vacancy', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('company');
            $table->dropColumn('last_day');
            $table->dropColumn('description');
            $table->dropColumn('image');
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
            $table->dropForeign(['salary_id']);
            $table->dropColumn('salary_id');
            $table->dropColumn('is_active');
        });
    }
};
