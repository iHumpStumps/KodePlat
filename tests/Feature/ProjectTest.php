<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();

        $this->setUpUser()->loginUser();
    }

    public function test_if_user_has_access_to_create(): void
    {
        $user = $this->setUpUser();

        $response = $this->get('/projects/create');
        $response->assertStatus(200);
    }
}
