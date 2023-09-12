<?php

namespace App\Http\Controllers;

use App\Domain\Service\SellingService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SellingController extends Controller
{
    public function __construct(private readonly SellingService $sellingService)
    {
    }

    public function findAll() : JsonResponse
    {
        return new JsonResponse($this->sellingService->findAll());
    }

    public function insert(Request $request) : void
    {
        $data = $request->all();
        $this->sellingService->insert($data);
    }

    public function findById(int $id) : JsonResponse
    {
        return new JsonResponse($this->sellingService->findById($id));
    }

    public function update(int $id, Request $request) : void
    {
        $data = $request->all();
        $this->sellingService->update($id, $data);
    }
}
