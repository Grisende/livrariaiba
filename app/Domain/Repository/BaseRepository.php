<?php

namespace App\Domain\Repository;

use App\Domain\Repository\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    public function findAll(Model $model): Collection
    {
        return $model::all();
    }

    public function insert(Model $model, array $data): void
    {
        $model::query()->insert($data);
    }

    public function findById(Model $model, int $id): Collection
    {
        return $model::all()->where('id', '=', $id);
    }

    public function update(Model $model, int $id, array $data): void
    {
        $model::query()->where('id', '=', $id)->update($data);
    }

    public function delete(Model $model, int $id): void
    {
        $model::destroy([$id]);
    }
}
