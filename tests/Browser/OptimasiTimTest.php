<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class OptimasiTimTest extends DuskTestCase
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
            $browser->visit('/home');
            $browser->clickLink('Sesi Assessment');
            $browser->visit('/assessmentSessions');
            $browser->clickLink('Detail');
            $browser->visit('/assessmentSessions/11');
            $browser->clickLink('Run Optimization Assignment');
            $browser->visit('/assessmentSessions/11/doAssignment');
            $browser->visit('/assignmentHeaders/26');
        });
    }
}
