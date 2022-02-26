<?php


namespace Domain\Task\Actions;


use App\Task\Models\Task;
use Domain\Task\DataTransferObjects\TaskData;

class EditTaskAction
{
    public function __invoke(TaskData $taskData): Task
    {
        return Task::update([
            'rask' => $taskData->task,
            'category' => $taskData->category
        ]);
    }
}
