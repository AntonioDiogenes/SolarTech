<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EconomyTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEconomy(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->maximize()
                ->pause(1000)
                ->scrollIntoView('@EconomySection')
                ->pause(1000)
                ->select('quantidadePlacas', '600')//pacote medio
                ->pause(1000)
                ->type('quantidadeAdicional', 12)
                ->pause(1000)
                ->type('consumoMedio', 1200)
                ->pause(1000)
                ->press('@enviarEconomy')
                ->pause(1000)
                ->assertSee('produçao gera mais que a demanda o saldo sera positivo')
                ->screenshot('EconomyResult');
        });
    }
}
