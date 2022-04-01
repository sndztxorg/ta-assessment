<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DetailJobTargetTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/');
            $browser->clickLink('Login');
            $browser->visit('/login');
            $browser->type('email', 'USER_EMAIL');
            $browser->type('password', 'USER_PASSWORD');
            $browser->press('Login');
            $browser->assertPathIs('/home');
            $browser->clickLink('Job Target');
            $browser->visit('/jobTargets');
            $browser->visit('/jobTargets/3');
        });
    }
}
