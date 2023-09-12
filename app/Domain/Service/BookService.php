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
        $data['created_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $data['updated_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $this->repository->insert($this->books, $data);
    }

    public function findById(int $id): Collection
    {
        return $this->repository->findById($this->books, $id);
    }

    public function update(int $id, array $data): void
    {
        $data['updated_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $this->repository->update($this->books, $id, $data);
    }
}
