<?php

namespace App\Http\Controllers;

use App\Domain\Service\BookService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BookController extends Controller
{
    public function __construct(private readonly BookService $service)
    {
    }

    public function findAll(): object
    {
        return $this->service->findAll();
    }

    public function insert(Request $request): void
    {
        $data = $request->all();
        $this->service->insert($data);
    }

    public function findById(int $id): JsonResponse
    {
        return new JsonResponse($this->service->findById($id));
    }

    public function update(int $id, Request $request): void
    {
        $data = $request->all();
        $this->service->update($id, $data);
    }

    public function delete(int $id): void
    {
        $this->service->delete($id);
    }
}
