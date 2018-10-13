<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Company;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    use WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThatWeCanGetTheName()
    {
        $company = new Company();
        $company->name = 'Company';

        $this->assertEquals($company->name,'Company');
    }

    public function testCreateCompany(){

        $user = factory(User::class)->create();

        $filepath = storage_path('app/public');


        $data = [
            'name' => $this->faker->word(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'logo' => $this->faker->image($filepath,150, 150,'technics',false,false)
        ];


        $this
            ->actingAs($user)
            ->post(route('company.store'),$data)
            ->assertSee('Company has been successfuly created');
    }
}
