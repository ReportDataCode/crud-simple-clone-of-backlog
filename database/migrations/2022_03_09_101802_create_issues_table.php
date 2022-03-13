<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 100);
            $table->text('description');
            $table->enum('status', ['open', 'in_progress', 'resolved']);
            $table->enum('priority', ['low', 'normal', 'high']);
            $table->string('assignee');
            $table->date('start_date');
            $table->date('due_date');
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
        Schema::dropIfExists('issues');

    }
};
