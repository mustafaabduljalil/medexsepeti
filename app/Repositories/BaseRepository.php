<?php
namespace App\Repositories;

class BaseRepository
{
    public function handleResponse($query, $hasPagination, $paginationCount)
    {
        if($hasPagination)
            return $query->paginate($paginationCount);

        return $query->get();
    }
}
