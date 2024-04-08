
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name')->unique();
            $table->timestamps();
        });

       //kirim data roles ke table roles
        DB::table('roles')->insert([
            ['role_name' => 'admin' , 
            'created_at' => now(),
            'updated_at' => now(),],
            ['role_name' => 'pengguna',
            'created_at' => now(),
            'updated_at' => now(),],
            ['role_name' => 'kurir',
            'created_at' => now(),
            'updated_at' => now(),],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
}