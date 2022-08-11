<?php

namespace Tests\Feature;

use App\Models\Materials;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MaterialsTest extends TestCase
{
    public function testsArticlesAreCreatedCorrectly()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $payload = [
            'name' => 'Дизайн',
            'author' => 'Автор',
            'type' => 'Дизайн/Web',
            'category' => 'Категория',
            'description' => 'Lorem Ipsum',
        ];

        $this->json('POST', '/api/materials', $payload, $headers)
            ->assertStatus(200)
            ->assertJson(['id' => 1, 'title' => 'Lorem', 'body' => 'Ipsum']);
    }

    public function testsArticlesAreUpdatedCorrectly()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $article = factory(Materials::class)->create([
            'name' => 'Дизайн',
            'author' => 'Автор',
            'type' => 'Дизайн/Web',
            'category' => 'Категория',
            'description' => 'Lorem Ipsum',
        ]);

        $payload = [
            'name' => 'Дизайн',
            'author' => 'Автор',
            'type' => 'Дизайн/Web',
            'category' => 'Категория',
            'description' => 'Lorem Ipsum',
        ];

        $response = $this->json('PUT', '/api/articles/' . $article->id, $payload, $headers)
            ->assertStatus(200)
            ->assertJson([
                'id' => 1,
                'name' => 'Дизайн',
                'author' => 'Автор',
                'type' => 'Дизайн/Web',
                'category' => 'Категория',
                'description' => 'Lorem Ipsum',
            ]);
    }

    public function testsArtilcesAreDeletedCorrectly()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $article = factory(Article::class)->create([
            'name' => 'Дизайн',
            'author' => 'Автор',
            'type' => 'Дизайн/Web',
            'category' => 'Категория',
            'description' => 'Lorem Ipsum',
        ]);

        $this->json('DELETE', '/api/articles/' . $article->id, [], $headers)
            ->assertStatus(204);
    }

    public function testArticlesAreListedCorrectly()
    {
        factory(Materials::class)->create([
            'name' => 'Дизайн',
            'author' => 'Автор',
            'type' => 'Дизайн/Web',
            'category' => 'Категория',
            'description' => 'Lorem Ipsum',
        ]);

        factory(Materials::class)->create([
            'name' => 'ДизайнДва',
            'author' => 'АвторДва',
            'type' => 'Дизайн/WebДва',
            'category' => 'КатегорияДва',
            'description' => 'Lorem IpsumДва',
        ]);

        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];

        $response = $this->json('GET', '/api/articles', [], $headers)
            ->assertStatus(200)
            ->assertJson([
                [ 'name' => 'Дизайн',
                    'author' => 'Автор',
                    'type' => 'Дизайн/Web',
                    'category' => 'Категория',
                    'description' => 'Lorem Ipsum',
                ],
                [
                    'name' => 'ДизайнДва',
                    'author' => 'АвторДва',
                    'type' => 'Дизайн/WebДва',
                    'category' => 'КатегорияДва',
                    'description' => 'Lorem IpsumДва',
                ]
            ])
            ->assertJsonStructure([
                '*' => ['id', 'name', 'author', 'type','category','description','created_at', 'updated_at'],
            ]);
    }
}
