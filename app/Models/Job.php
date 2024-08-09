<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Commodities Trader',
                'salary' => 100000,
            ],
            [
                'id' => 2,
                'title' => 'Software Engineer',
                'salary' => 120000,
            ],
            [
                'id' => 3,
                'title' => 'Data Scientist',
                'salary' => 130000,
            ],
        ];
    }

    public static function find(int $id): array
    {
        return Arr::first(static::all(), fn ($job) => $job['id'] === $id);
    }
}
