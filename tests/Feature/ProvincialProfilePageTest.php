<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProvincialProfilePageTest extends TestCase
{
    public function test_profile_page_renders_resilient_fallback_content_without_database(): void
    {
        $response = $this->get('/profile');

        $response->assertOk();
        $response->assertSee('Lalawigan ng Camarines Sur');
        $response->assertSee('A resilient and thriving province');
        $response->assertSee('Pili');
    }
}
