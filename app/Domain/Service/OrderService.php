<?php

namespace App\Domain\Service;

use App\Domain\Models\Orders;
use App\Domain\Repository\Contracts\OrdersRepositoryInterface;

class OrderService
{
    public function __construct(
        private readonly OrdersRepositoryInterface $repository,
        private readonly Orders                    $orders
    )
    {
    }

    public function findAll(): array
    {
        return $this->repository->findAll($this->orders);
    }

    public function insert(array $data): void
    {
        $data['created_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $data['updated_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $this->repository->insert($this->orders, $data);
    }

    public function findById(int $id): array
    {
        return $this->repository->findById($this->orders, $id);
    }

    public function update(int $id, array $data): void
    {
        $data['updated_at'] = (new \DateTime('now'))->format(DATE_ATOM);
        $this->repository->update($this->orders, $id, $data);
    }
}
