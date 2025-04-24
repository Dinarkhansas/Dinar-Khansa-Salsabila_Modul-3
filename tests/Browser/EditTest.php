<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group edit
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email','Dinar123@gmail.com')
                    ->type('password','1202223018')
                    ->press('LOG IN')
                    ->pause(2000)
                    ->assertPathIs('/dashboard')
                    ->clickLink('Notes')
                    ->clickLink('Edit')
                    ->assertSee('Dinar')
                    ->type('title','Modul Akhir')
                    ->type('description','Bismilah')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
}
