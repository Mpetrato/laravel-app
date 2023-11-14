<?php

namespace App\Services;

use App\DTOs\CreateSupportDTO;
use App\DTOs\UpdateSupportDTO;
use stdClass;

class SupportService
{
  protected $repository;

  public function __construct()
  {
    
  }
  
  public function getAll(string $filter = null): array
  {
    return $this->repository->getAll($filter);
  }

  public function findOne(string|int $id): stdClass|null
  {
    return $this->repository->findOne($id);
  }

  public function new(CreateSupportDTO $dto): stdClass
  {
    return $this->repository->new($dto);
  }

  public function update(UpdateSupportDTO $dto): stdClass|null
  {
    return $this->repository->update($dto);
  }

  public function remove(string|int $id): bool|null
  {
    return $this->repository->delete($id);
  }
}