<?php
namespace Domain\Task\Actions;

use Domain\Task\Models\Task;
use Domain\Task\DataTransferObjects\TaskDTO;

final class CreateTaskAction 
{ 

    public function __invoke(TaskDTO $taskDTO): Task
    {
        return Task::create([
            'name' => $taskDTO->name,
            'category' => $taskDTO->category
        ]);
    }

}