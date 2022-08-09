<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MaterialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public $type = [
        'Книга',
        'Статья',
        'Видео',
        'Сайт/Блог',
        'Подборка',
        'Ключевые идеи книги'
    ];
    public $category = ['Дизайн/Общее'];

    public function definition()
    {
        $key = array_rand($this->type,1);
        return [
            'name' => $this->faker->jobTitle,
            'author' => $this->faker->name(),
            'type' => $this->type[$key],
            'category' => $this->category[0],
            'description' => $this->faker->sentence,
            'created_at' => $this->faker->date,
            'updated_at' => $this->faker->date,
        ];
    }
}
