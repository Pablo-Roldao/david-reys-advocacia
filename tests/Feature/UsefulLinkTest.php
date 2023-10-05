<?php

namespace Tests\Feature;

use App\Models\UsefulLink;
use App\Repositories\EloquentUsefulLinkRepository;
use Tests\TestCase;

class UsefulLinkTest extends TestCase
{

    public function testCreateUsefulLink(): void
    {
        $usefulLink = UsefulLink::factory()->make();

        EloquentUsefulLinkRepository::store($usefulLink);

        $this->assertDatabaseHas('useful_links', $usefulLink->toArray());
    }

    public function testDeleteUsefulLink(): void
    {
        $usefulLink = UsefulLink::factory()->create();

        EloquentUsefulLinkRepository::delete($usefulLink->getId());

        $this->assertDatabaseMissing('useful_links', $usefulLink->toArray());
    }

    public function testUpdateUsefulLink(): void
    {
        $usefulLink = UsefulLink::factory()->create();

        $usefulLink->setTitle('You Tube');
        $usefulLink->setLink('https://youtube.com.br');

        EloquentUsefulLinkRepository::update($usefulLink->getId(), $usefulLink);

        $this->assertDatabaseHas('useful_links', $usefulLink->toArray());
    }

}
