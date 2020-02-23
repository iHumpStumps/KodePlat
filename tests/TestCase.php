<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /** @var $user User */
    protected $user;

    protected function setUpUser(): TestCase
    {
        $this->user = factory(User::class)->create();

        $this->assertDatabaseHas((new User)->getTable(), [
            'id' => $this->user->id,
        ]);

        return $this;
    }

    protected function loginUser($user = null): void
    {
        if ($user === null){
            $user = $this->user;
        }

        $this->actingAs($user);
        $this->assertAuthenticatedAs($user);
    }
}
