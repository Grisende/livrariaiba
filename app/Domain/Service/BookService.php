<?php

namespace App\Domain\Service;

use App\Domain\Models\Books;
use App\Domain\Repository\Contracts\BooksRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class BookService
{
    public function __construct(
        private readonly BooksRepositoryInterface $repository,
        private readonly Books                    $books
    )
    {
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll($this->books);
    }

    public function insert(array $data): void
    {
        $this->repository->insert($this->books, $data);
    }

    public function findById(int $id): Collection
    {
        return $this->repository->findById($this->books, $id);
    }

    public function update(int $id, array $data): void
    {
        $this->repository->update($this->books, $id, $data);
    }
}
