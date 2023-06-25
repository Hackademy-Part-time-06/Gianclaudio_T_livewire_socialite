
<div>
    @if (session()->has('tasks'))
    <div class="alert alert-success m-2">
        {{ session('tasks') }}
    </div>
    @endif
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{$task->id}}</th>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <a href="{{route('livewire.edit', $task)}}" class="btn btn-warning">Modifica</a>
                    <button wire:click="destroy({{$task}})" class="btn btn-danger">Elimina</button> 
                </td>

            </tr>
            @endforeach

        </tbody>
        
    </table>
    

</div>
