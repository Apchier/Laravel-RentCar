<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User; // Pastikan ini diimpor

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('plat_nomor')->nullable();
            $table->string('merk')->nullable();
            $table->enum('jenis', ['Lamborghini', 'Ferrari', 'BMW'])->nullable();
            $table->string('harga')->nullable();
            $table->text('foto')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}
