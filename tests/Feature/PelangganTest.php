<?php

namespace Tests\Feature;

use App\Models\Pelanggan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PelangganTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_find_user(){
        $nama = Pelanggan::find('0B5B79E6-B20D-4DBE-9AB0-97968F982C92')->nama;
        $this->assertTrue($nama === 'Iriana Kuswandari');
    }
}
