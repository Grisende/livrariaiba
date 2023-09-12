<?php

namespace App\Domain\Service;

use App\Domain\Models\Sellings;
use App\Domain\Repository\Contracts\SellingsRepositoryInterface;

class SellingService
{
    public function __construct(
        private readonly SellingsRepositoryInterface $repository,
        private readonly Sellings                    $sellings
    )
    {
    }

    public function findAll(): array
    {
        return $this->repository->findAll($this->sellings);
    }

    public function insert(array $data): void
    {
        $data['created_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $data['updated_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $this->repository->insert($this->sellings, $data);
    }

    public function findById(int $id): array
    {
        return $this->repository->findById($this->sellings, $id);
    }

    public function update(int $id, array $data): void
    {
        $data['updated_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $this->repository->update($this->sellings, $id, $data);
    }
}
