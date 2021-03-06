<?php

namespace App\Services;

use App\Models\AbstractModel;
use App\Repositories\Interfaces\RepositoryInterface;

abstract class AbstractService
{
    /**
     * @var RepositoryInterface $repository
     */
    protected $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return $this->repository->get($id);
    }

    /**
     * @param int $id
     * @param array|null $relations
     * @return AbstractModel
     */
    public function getWith(int $id, ?array $relations = []): AbstractModel
    {
        return $this->repository->getWith($id, $relations);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->repository->all();
    }

    /**
     * @param null|int $id
     * @param array $data
     * @param array|null $relations
     * @return mixed
     */
    public function persist(?int $id, array $data, ?array $relations = null)
    {
        return $this->repository->persist($id, $data, $relations);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    /**
     * @param array $data
     * @return int
     */
    private function create(array $data): int
    {
        return $this->repository->create($data);
    }

    /**
     * @param int $userId
     * @param array $data
     * @return int
     */
    private function update(int $userId, array $data): int
    {
        return $this->repository->update(
            $userId,
            $data
        );
    }
}
