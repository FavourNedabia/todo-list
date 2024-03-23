<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
// use Illuminate\Validation\Rules\In;

class Postcontroller extends Controller
{

    public function index(){
        // return view("store");
        //récuperer la liste de tous les taches
        $tasks = Task::all();
        // dd($posts); //pour le debuggage
        //la fonction compact() est utilisée pour créer ce tablea associatif 
        return view("tasks",compact("tasks"));
    }
    public function add_task(Request $request){
            return view("add_task");
        }
        //enregistrer une donné e dans la base de donnée
        public function store(TaskRequest $request){
            $task = Task::create([
                // "task" => "Savon",
                // "description" => "Savon de soin pour la peau",
                // "is_enable"=>false,
                "task" =>$request->input("title"),
                "description" => $request->input("content"),
            ]);
            return redirect()->route("index.task");

        }
        
        public function tasks(){
            $tasks = Task::all();
            return $tasks;
        }

               
        //supprimer une tache
        public function delete_task(Request $request, $id){
            $task = Task::findOrFail($id);
            $task->Delete();
            return redirect()->route("index.task");

         // Rediriger vers la route 'find_post'
            // return $post;
            // return redirect()->route('posts');
        }
        public function confirm_delete_task($id) {
            $task = Task::findOrFail($id);
            return view('delete_task', compact('task'));
        }

        // Postcontroller.php

        // Méthode pour afficher la page de confirmation de la modification
    public function confirm_update_task($id)
    {
        $task = Task::find($id);
        return view("update_task", compact("task"));
    }

    public function update_task(Request $request, $id){
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Recherche de la tâche à mettre à jour
        $task = Task::findOrFail($id);

        // Mise à jour des attributs de la tâche avec les données du formulaire
        $task->task = $validatedData['title'];
        $task->description = $validatedData['content'];

        // Sauvegarde des modifications dans la base de données
        $task->save();

        // Redirection vers la liste des tâches avec un message de succès
        return redirect()->route('index.task')->with('success', 'Tâche mise à jour avec succès');
    }

        
        // Afficher toutes les tâches
        public function find_task(){
            $task= Task::all();
            // $post = Task::Where("task","Savon");
            return $task;
        }
}





    
   

