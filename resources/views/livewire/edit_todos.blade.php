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

        <button wire:click="update" type="button" class="btn btn-primary">Update</button>
     
      </form>




    
</div>
