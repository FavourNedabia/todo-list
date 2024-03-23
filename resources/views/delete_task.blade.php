@extends('template.index')

@section('content')
<div class="container">
    <h2>Confirmation de suppression</h2>
    <div class="card">
        <div class="card-body">
            <p>Voulez-vous vraiment supprimer la tâche suivante ?</p>
            <ul>
                <li><strong>Nom de la tâche :</strong> {{ $task->task }}</li>
                <li><strong>Description :</strong> {{ $task->description }}</li>
            </ul>
            <form action="{{ route('delete.task', ['id' => $task->id]) }}" method="POST">
                @csrf
                @method("DELETE")
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                    <a href="{{ route('index.task') }}" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
