<x-layout heading="SHOW TASK">
    <div class=" my-3 bg-white shadow-sm border border-slate-200 rounded-lg w-100 space-y-3">
     
        <div class="p-4">
        <h6 class="mb-2 text-red-500 text-xl font-semibold">
            {{ $task->title }}
        </h6>
        <p class="text-slate-600 leading-normal font-light">
            {{ $task->description }}
        </p>
        </div>
        <div class="px-4 pb-4 pt-0 mt-2 flex justify-between">
           
            <form method="POST" action="/tasks/{{ $task->id }}">
                @csrf
                @method('Delete')
                <button  type="submit" class="rounded-md bg-red-700 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Delete    
                </button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </form>

       
            <a href="/tasks/{{$task->id}}/edit" class="rounded-md bg-green-700 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            edit    
            </a>
        </div>

 


  </div>  


</x-layout>