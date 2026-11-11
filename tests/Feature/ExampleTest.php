<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/dashboard');
        $this->get('/dashboard')->assertOk();
    }

    public function test_dashboard_navigation_uses_relative_urls_behind_a_proxy(): void
    {
        $this->get('http://runtime.internal/dashboard')
            ->assertOk()
            ->assertSee('href="/anexos"', false)
            ->assertSee('href="/registros"', false)
            ->assertDontSee('runtime.internal');
    }

    public function test_saving_an_annex_redirects_to_a_relative_url_behind_a_proxy(): void
    {
        $this->post('http://runtime.internal/anexos', [
            'titulo' => 'PRIMER ENTREGABLE',
            'responsable' => 'DARWIN UZURIAGA CLAUDIO',
            'periodo_ejecucion_contractual' => 'DESDE EL 06 DE ABRIL DE 2026 AL 05 DE MAYO DE 2026',
            'fecha_contractual_ingreso_entregable' => '2026-04-06',
            'estado' => 'activo',
        ])
            ->assertRedirect('/anexos/1');
    }
}
