<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group regist
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->assertSee('Enterprise')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name','Dinar Khansa Salsabila')
                    ->type('email','dinar123@gmail.com')
                    ->type('password','1202223018')
                    ->type('password_confirmation','1202223018')
                    ->press('REGISTER');

        });
    }
}
