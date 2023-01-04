<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
class Todos extends Component
{
    public $heading,$description;
    public $todos;
    public $check_show = false;
    public function store(){

        Todo::create([
            'heading' => $this->heading,
            'description' => $this->description,
        ]);
    
    }
    public function show_todos(){
        $this->check_show = true;
    }

    public function delete($id){
        Todo::where('id','=',$id)->delete();
    }


    public function update($id){
        Todo::where('id','=',$id)->update([
            'heading' => $this->heading,
            'description' => $this->description,
        ]);
    }

    public function render()
    {
     $this->todos=  Todo::all();
        return view('livewire.todos');
    }

 
}
