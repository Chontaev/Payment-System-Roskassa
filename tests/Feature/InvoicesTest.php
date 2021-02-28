<?php

namespace Tests\Feature;
use App\Model\User;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvoicesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function castomer_can_see_form_for_creating_new_invoice()
    {
        $user = ModelsUser::factory()->make();
        $this->get('invoices/new')
        ->assertStatus(200)
        ->assertSee('Create new invoices');
    }
}
