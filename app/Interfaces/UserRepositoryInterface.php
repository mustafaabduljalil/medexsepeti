<?php
namespace App\Interfaces;


interface UserRepositoryInterface
{
    public function getList();
    public function getListWithPagination($usersCountPerPage);
    public function getUser($field, $value);
}
