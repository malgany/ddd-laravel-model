<?php


namespace Domain\Task\Actions;


use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

final class CreateTaskAction
{
    public function execute(TaskData $taskData): Task
    {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category
        ]);
    }
}
