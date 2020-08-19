<?php

namespace Mehradsadeghi\FilterQueryString\Tests\Filters\ComparisonClauses;

use Mehradsadeghi\FilterQueryString\Models\User;
use Mehradsadeghi\FilterQueryString\Tests\TestCase;

class LessThanTest extends TestCase
{
    /** @test */
    public function list_of_users_with_age_of_less_to_22_is_shown_correctly()
    {
        $query = 'less=age,22';

        $response = $this->get("/?$query");

        $response->assertJsonCount(2);

        $query = 'less=created_at,2020-10-01';

        $response = $this->get("/?$query");

        $response->assertJsonCount(1);
    }

    /** @test */
    public function less_with_undefined_field_or_value_will_be_ignored()
    {
        $query = 'less=20';

        $response = $this->get("/?$query");

        $response->assertJsonCount(User::count());

        $query = 'less=age';

        $response = $this->get("/?$query");

        $response->assertJsonCount(User::count());
    }
}
