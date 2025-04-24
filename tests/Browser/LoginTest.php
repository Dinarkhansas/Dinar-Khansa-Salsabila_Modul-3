<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->assertSee('Enterprise')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email','Dinar123@gmail.com')
                    ->type('password','1202223018')
                    ->press('LOG IN');

        });
    }
}
