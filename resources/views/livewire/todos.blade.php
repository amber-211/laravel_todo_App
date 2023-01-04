<div>
    <form>
  
        <h1>Todo App </h1>
        

        <div class="form-group">
          <label for="exampleFormControlInput1">Heading</label>
          <input type="text" wire:model="heading" class="form-control" >
        </div>
     
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Text</label>
          <textarea class="form-control" wire:model="description" rows="3"></textarea>
        </div>

        <button wire:click="store" type="button" class="btn btn-primary">Save</button>
        <br><br>
        <button wire:click="show_todos" type="button" class="btn btn-primary">Show</button>
      </form>


@if($check_show)

@include('livewire.show_todos')
@endif

    
</div>
