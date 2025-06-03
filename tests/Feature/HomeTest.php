<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;

it('can visit the welcome page', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Welcome');
});

it('can visit the dashboard page when logged in', function () {
    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->get('/dashboard');
    $response->assertStatus(200);
    $response->assertSee('Dashboard');
});
