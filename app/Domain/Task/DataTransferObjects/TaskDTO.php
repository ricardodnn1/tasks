<?php
namespace Domain\Task\DataTransferObjects;

use App\Web\Task\Requests\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;

class TaskDTO extends DataTransferObject 
{

    /**
     * @var string
     */
    public $task; 

    /**
     * @var string
     */
    public $category;

    public static function fromRequest(TaskRequest $taskRequest): TaskDTO { 
        return new Self([
            'name' => $taskRequest['name'],
            'category' => $taskRequest['category']
        ]);      
    }
    
}