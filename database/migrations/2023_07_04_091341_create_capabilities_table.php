<?php

use App\Models\Capability;
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
        Schema::create('capabilities', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('description');
            $table->timestamps();
        });

        $capabilities = [
            ['code' => '1', 'description' => 'Buyer'],
            ['code' => '2', 'description' => 'Seller'],
        ];

        foreach($capabilities as $capability)
        {
            Capability::create($capability);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capabilities');
    }
};
