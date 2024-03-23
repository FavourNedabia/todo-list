
@extends("template.index")

@section("content")
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
        <h2>Mes Taches</h2>
        <a href="{{ route('add.task') }}" class="btn btn-primary">Ajouter une tâche</a>
    </div>
    <div class="row">
        @foreach ($tasks as $task)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$task->task}}</h5>
                    <p class="card-text">{{$task->description}}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('confirm.update.task', ['id' => $task->id]) }}" class="btn btn-primary">Modifier</a>
                        <a href="{{ route('confirm.delete.task', ['id' => $task->id]) }}" class="btn btn-danger">Supprimer</a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection






 {{-- <tr>
    {{-- <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
                <th scope="row">{{$tache->id}}</th>
                <td>{{$tache->titre}}</td>
                <td>{{$tache->description}}</td>
                <td>{{$tache->date}}</td>
                <td>
                    {{-- <a href="{{route('taches.edit', $tache->id)}}" class="btn btn-primary">Editer</a>  --}}