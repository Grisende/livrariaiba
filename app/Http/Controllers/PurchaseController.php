<?php

namespace App\Http\Controllers;

use App\Domain\Service\PurchaseService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PurchaseController extends Controller
{
    public function __construct(private readonly PurchaseService $service)
    {
    }

    public function findAll() : JsonResponse
    {
        return new JsonResponse($this->service->findAll());
    }

    public function insert(Request $request) : void
    {
        $data = $request->all();
        $this->service->insert($data);
    }

    public function findById(int $id) : JsonResponse
    {
        return new JsonResponse($this->service->findById($id));
    }

    public function update(int $id, Request $request) : void
    {
        $data = $request->all();
        $this->service->update($id, $data);
    }
}
