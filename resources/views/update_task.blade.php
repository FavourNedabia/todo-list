@extends("template.index")

@section('content')
<div class="container">
    <h1>Modifier la tache</h1>
    <div class="row justify-content-center mt-5">
        <div class="card col-lg-6 col-sm-6 col-12 p-3">
            <form action="{{ route("update.task", ['id' => $task->id])}}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="title" class="form-label">Titre de ma tache</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp"
                        value="{{ $task->task }}">
                    @error('title')
                    <strong class="text text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-floating">
                        <textarea name="content" class="form-control" id="content"
                            placeholder="Leave a comment here"
                            style="height: 100px">{{ $task->description }}</textarea>
                        <label for="content">Description de la tâche</label>
                    </div>
                    @error("content")
                    <strong class="text text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>
@endsection
