<?php


namespace Domain\Task\Actions;


use App\Task\Models\Task;
use Domain\Task\DataTransferObjects\TaskData;

class DeleteTaskAction
{
    public function __invoke(TaskData $taskData): Task
    {
        return Task::delete([
            'rask' => $taskData->task,
            'category' => $taskData->category
        ]);
    }
}
