<?php

namespace Tests\Browser;

use App\RequestSoiree;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create([
                'email' => 'vaibhav@omg.com',
                'name' => 'Vaibhav Rathore'
            ]);

            $browser->loginAs($user)
                    ->visit('/login')
                    ->assertSee('Vaibhav Rathore');
        });
    }
}
