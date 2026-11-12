
<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // User fields already exist in the create_users_table migration.
    }

    public function down(): void
    {
        // Nothing to reverse.
    }
};