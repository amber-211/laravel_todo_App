<div wire:poll>
    <table class="table">
        <thead>
          <tr>
      
            <th scope="col">heading</th>
            <th scope="col">description</th>
<th>action</th>
          </tr>
        </thead>
        <tbody>

            @foreach($todos as $t)
          <tr>

            <td>{{ $t->heading }}</td>
            <td>{{ $t->description }}</td>
       <td>
        <button class="btn btn-danger" wire:click="delete({{$t->id}})">delete</button>
        <button class="btn btn-primary" wire:click="update({{$t->id}})">update</button>
       </td>
          </tr>
         @endforeach
        </tbody>
      </table>
</div>