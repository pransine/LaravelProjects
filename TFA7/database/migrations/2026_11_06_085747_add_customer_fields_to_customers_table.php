<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // Customer fields already exist in the create_customers_table migration.
    }

    public function down(): void
    {
        // Nothing to reverse.
    }
};