<?php

namespace Tests\Feature;

use App\Traits\PelangganTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TraitPelangganTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_kodePelanggan(){
        $class = new Class() {
            use PelangganTrait;
        };
       $this->assertEquals( $class->buatKodePelanggan(), '63');
    }
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
