<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PaginationPresenter implements PaginationInterface
{
  public function __construct(
    protected LengthAwarePaginator $paginator,
  )
  {
    
  }

  /**
   * @return stdClass[]
   */
  public function items(): array
  {

  }
  public function total(): int
  {
    return $this->paginator->total() ?? 0;
  }
  public function isFirstPage(): bool
  {
    return $this->paginator->onFirstPage();
  }
  public function isLastPage(): bool
  {

  }
  public function currentPage(): int
  {
    return $this->paginator->currentPage() ?? 1;
  }
  public function getNumberNextPage(): int
  {

  }
  public function getNumberPreviousPage(): int
  {

  }
}