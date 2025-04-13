<x-layout heading="TASK">
    @foreach ($tasks as $task)
    <div class=" my-3 bg-white shadow-sm border border-slate-200 rounded-lg w-100 space-y-3">
     
        <div class="p-4">
          <h6 class="mb-2 text-red-500 text-xl font-semibold">
            {{ $task->title }}
          </h6>
          <p class="text-slate-600 leading-normal font-light">
            {{ $task->description }}
          </p>
        </div>
        <div class="px-4 pb-4 pt-0 mt-2">
          <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
           view
          </button>
        </div>
      </div>  
    

    @endforeach
    <div class="mt-2">
        {{ $tasks->links() }}
    </div>
</x-layout>