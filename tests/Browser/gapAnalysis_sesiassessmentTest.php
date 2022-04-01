<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class gapAnalysis_sesiassessmentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSesiAssessment()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/');
            $browser->clickLink('Login');
            $browser->visit('/login');
            $browser->type('email', 'USER_EMAIL');
            $browser->type('password', 'USER_PASSWORD');
            $browser->press('Login');
            $browser->assertPathIs('/home');
            $browser->clickLink('Gap Analysis');
            $browser->visit('/gap/company/9');
            $browser->assertSee('Tel-U SI4002');
            $browser->script('console.log("Done Test : Menampilkan Sesi Assessment")');
        });
    }
}
