<?php

namespace Tests\Feature;

use App\Contact;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_contact_can_be_added()
    {
        $this->withoutExceptionHandling();
        $this->post('/api/contacts', $this->data());
        $contact = Contact::first();
        $this->assertEquals('Test name', $contact->name);
        $this->assertEquals('1@gmail.com', $contact->email);
        $this->assertEquals('05/14/1988', $contact->birthday->format('m/d/Y'));
        $this->assertEquals('ABC string', $contact->company);
    }


    public function test_fields_are_required()
    {

        collect(['name', 'email', 'birthday', 'company'])->each(function ($field) {
            $response = $this->post('/api/contacts',
                array_merge($this->data(), [$field => '']));
            $response->assertSessionHasErrors($field);
            $this->assertCount(0, Contact::all());
        });
    }

    public function test_email_must_be_a_valid_email()
    {
        $response = $this->post('/api/contacts',
            array_merge($this->data(), ['email' => 'NOT AN EMAIL']));
        $response->assertSessionHasErrors('email');
        $this->assertCount(0, Contact::all());
    }

    public function test_birthday_are_properly_stored()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/api/contacts',
            array_merge($this->data()), ['birthday' => 'May 14, 1988']);

        $this->assertCount(1, Contact::all());
        $this->assertInstanceOf(Carbon::class, Contact::first()->birthday);
        $this->assertEquals('05-14-1988', Contact::first()->birthday->format('m-d-Y'));

    }

    public function test_a_contact_can_be_retrieved()
    {
        $contact  = factory(Contact::class)->create();
        $response = $this->get('/api/contacts/'.$contact->id);
        $response->assertJson([
            'name'     => $contact->name,
            'email'    => $contact->email,
            'birthday' => $contact->birthday,
            'company'  => $contact->company,
        ]);

    }

    public function test_a_contact_can_be_patched()
    {

        $contact  = factory(Contact::class)->create();
        $response = $this->patch('/api/contacts/'.$contact->id, $this->data());

        $contact = $contact->fresh();
        $this->assertEquals('Test name', $contact->name);
        $this->assertEquals('1@gmail.com', $contact->email);
        $this->assertEquals('05/14/1988', $contact->birthday->format('m/d/Y'));
        $this->assertEquals('ABC string', $contact->company);
    }

    public function test_a_contact_can_be_deleted()
    {
        $contact  = factory(Contact::class)->create();
        $response = $this->delete('/api/contacts/'.$contact->id);
        $this->assertCount(0, Contact::all());

    }

    private function data()
    {
        return [
            'name'     => 'Test name',
            'email'    => '1@gmail.com',
            'birthday' => '05/14/1988',
            'company'  => 'ABC string',
        ];
    }
}
