<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Category;

class CategoryTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * Create a valid category
     *
     * @return void
     */
    public function testCreateValidCategory()
    {
        $category = Category::make([
            'name' => 'Dairy',
        ]);

        $response = $this->post('/admin/categories', [
            'name' => $category->name,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('categories', [
            'name' => $category->name,
        ]);
    }
}
