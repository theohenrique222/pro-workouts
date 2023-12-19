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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('years');
            $table->integer('weight');
            $table->boolean('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

// insert training
// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('clients', function (Blueprint $table) {
//             $table->string('a');
//             $table->string('b');
//             $table->string('c');
//             $table->string('d');
//             $table->string('e');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('clients', function (Blueprint $table) {
//             $table->dropColumn('a');
//             $table->dropColumn('b');
//             $table->dropColumn('c');
//             $table->dropColumn('d');
//             $table->dropColumn('e');
//         });
//     }
// };
