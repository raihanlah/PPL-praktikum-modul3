<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit(url: '/')
                    ->assertSee('started')
                    ->clicklink('Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'raihannoor23@gmail.com')
                    ->type(field: 'password', value: 'test')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard');
        });
    }
}
