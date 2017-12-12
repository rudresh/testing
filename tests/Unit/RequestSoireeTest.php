<?php

namespace Tests\Unit;

use App\RequestSoiree;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RequestSoireeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $soiree = RequestSoiree::create([
            'email' => 'pankaj@coloredcow.com',
            'name' => 'Pankaj Agarwal'
        ]);

        $this->assertTrue($soiree->email == 'pankaj@coloredcow.com');
    }

    public function testDelete()
    {
        $soiree = RequestSoiree::create([
            'email' => 'vaibhav@coloredcow.com',
            'name' => 'Vaibhav Rathore'
        ]);

        $deleteRequest = $soiree->delete();

        $this->assertTrue($deleteRequest);
    }

    public function testRequestApprove()
    {
        $soiree = RequestSoiree::create([
            'email' => 'moohit@coloredcow.com',
            'name' => 'Mohit'
        ]);
        $this->assertTrue($soiree->accept());
    }

    public function testRequestReject()
    {
        $soiree = RequestSoiree::create([
            'email' => 'kd@coloredcow.com',
            'name' => 'Nishanth KD'
        ]);
        $this->assertTrue($soiree->reject());
    }


}
