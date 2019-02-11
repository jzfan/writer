<?php

namespace Tests\Feature;

use App\Character;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CharacterTest extends TestCase
{
	use RefreshDatabase;

	/** @test */
	public function it_has_mbti()
	{
		$mbti = factory(Character::class)->create()->mbti;
		$this->assertEquals(4, strlen($mbti));
		$this->assertContains($mbti[0], 'EI');
		$this->assertContains($mbti[1], 'SN');
		$this->assertContains($mbti[2], 'TF');
		$this->assertContains($mbti[3], 'JP');
		
	}
}
