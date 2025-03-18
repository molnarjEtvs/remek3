<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Seeder;

class SchoolTest extends TestCase
{

    public function test_database(){
        $this->assertDatabaseHas('school', [
            'name' => ''
        ]);
    }


    public function test_if_seeder_works(){
        $this->seed();
        $this->assertDatabaseHas('school', [
            'name' => 'BGÉSZC Eötvös SZKI'
        ]);

    }
}
