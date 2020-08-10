<?php

namespace Tests\Feature\Admin;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminEventsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function admins_can_visit_the_admin_dashboard()
    {
        // $this->markTestIncomplete();
        $this->actingAsAdmin()
            ->get(route('admin_events'))
            ->assertStatus(200)
            ->assertSee('Admin Events');
    }

    /** @test */
    function non_admin_users_cannot_visit_the_admin_dashboard()
    {

        $this->actingAsUser()
            ->get(route('admin_events'))
            ->assertStatus(302)
            ->assertRedirect('login');
    }

    /** @test */
    function guests_cannot_visit_the_admin_dashboard()
    {
        $this->get(route('admin_events'))
            ->assertStatus(302)
            ->assertRedirect('login');
    }
}
