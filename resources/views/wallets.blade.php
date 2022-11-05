<x-layout>
<div class="text-center min-w-800px bg-yellow-400 p-10 rounded">
  {{--Title--}}
  <div class="bg-blue-700 py-6">
    <h1>Wallets</h1>
  </div>

  {{--Form--}}
  <div class="bg-red-700 justify-center flex text-left">
    <form method="POST" action="/add">
      @csrf
    
      <div class="py-3">

        <div>
          <label for="name">Name</label>
        </div>
  
        <div>
          <input type="text" id="name" name="name">
        </div>
      </div>

      <div class="py-3">
        <div>
          <label for="amount">Amount</label>
        </div>
  
        <div>
          <input type="text" id="amount" name="amount">
        </div>
      </div>
      
      <div class="py-3 text-center">
        <button class="rounded-full p-2 bg-blue-700" type="submit">Submit</button>
      </div>
    
    </form>
  </div>
  
  {{--Wallets--}}
  <div class="flex flex-wrap bg-green-700 py-6" >
    @foreach ($wal as $item)
      <div class="rounded bg-yellow-400 m-5 w-255 hover:bg-red-700 p-6">
        {{-- @dd($loop) --}}
        
        <h2>{{$loop->iteration}}.{{$item->name}}</h2>
        <h4>{{$item->amount}}$</h4>
      </div>
    @endforeach
  </div>

</div>
</x-layout>