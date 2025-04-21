<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * @group regist
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/')
                    ->assertSee('')
                    ->clicklink('Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'email', value: 'andre23@gmail.com')
                    ->type(field: 'password', value: 'barbershop')
                    ->press(button: 'Register')
                    ->assertPathIs(path: '/Register');
        });
    }
}
