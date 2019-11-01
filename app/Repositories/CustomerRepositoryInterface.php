<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function all();
    public function showBy($id);
    public function update($id);
}