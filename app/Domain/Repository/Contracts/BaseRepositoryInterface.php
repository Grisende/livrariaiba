<?php

namespace App\Domain\Repository\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function findAll(Model $model): Collection;
    public function insert(Model $model, array $data): void;
    public function findById(Model $model, int $id): Collection;
    public function update(Model $model, int $id, array $data): void;
    public function delete(Model $model, int $id): void;
}
