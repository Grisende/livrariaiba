<?php

namespace App\Domain\Service;

use App\Domain\Models\Purchases;
use App\Domain\Repository\Contracts\PurchasesRepositoryInterface;

class PurchaseService
{
    public function __construct(
        private readonly PurchasesRepositoryInterface $repository,
        private readonly Purchases                    $purchases
    )
    {
    }

    public function findAll(): array
    {
        return $this->repository->findAll($this->purchases);
    }

    public function insert(array $data): void
    {
        $this->repository->insert($this->purchases, $data);
    }

    public function findById(int $id): array
    {
        return $this->repository->findById($this->purchases, $id);
    }

    public function update(int $id, array $data): void
    {
        $this->repository->update($this->purchases, $id, $data);
    }
}
