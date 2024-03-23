@extends("template.index")

@section('content')
<center>
    {{-- //formulaire de saisie des taches avec les messages d'erreur --}}
    <div class="card col-lg-6 col-sm-6 col-6 mt-5 p-3">
       <form action=" {{ route("store.task")}}" method="POST">
        @csrf
        @method("POST")
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de ma tache</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('title'){{-- pour afficher un message si un champ n'est pas saisi  --}}
            <strong class="text text-danger">{{$message}} </strong>
            @enderror
            
          </div>
          
          <div class="mb-3">
            <div class="form-floating">
                <textarea name="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"style="height: 100px"></textarea>
                <label for="floatingTextarea"></label>
              </div>
           @error("content")
               <strong class="text text-danger">{{$message}} </strong>
           @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Ajouter</button>
       </form>
    </div>
</center>
    
@endsection