<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table("team")->insert(array(
            array("name" => "Tiberiu",
                "position" => "Web Architect.",
                "photo" => "tibi.jpg",
            ),
            array("name" => "Ovidiu",
                "position" => "Junior Fullstack Web Developer",
                "photo" => "ovidiu.png",
            ),
        ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
