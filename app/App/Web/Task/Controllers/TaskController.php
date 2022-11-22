<?php
namespace App\Web\Task\Controllers;
 

use Domain\Task\Models\Task;
use App\Web\Task\Requests\TaskRequest;
use App\Core\Http\Controllers\Controller;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\DataTransferObjects\TaskDTO;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = app(Task::class)->get('*');
        return view('welcome', compact('tasks'));
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $data = TaskDTO::fromRequest($request);
        $action($data);
        return back()->with(['success' => 'Tarefa criada com sucesso!!!']);
    }

}