<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group buat
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
                    ->clickLink('Create Note')
                    ->type('title','Modul 3')
                    ->type('description','Susah banget')
                    ->press('CREATE')
                    ->assertPathIs('/notes');

        });
    }
}
