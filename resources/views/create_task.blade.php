<!-- Blade File I used at first when trying to grasp everything. No longer used-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', '')}}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <root></root>
    </div>

    <div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <label for="exampleFormControlTextarea1" class="form-label inline-block mt-5 mb-2 text-gray-700">Create new Task</label>
                    <textarea
                    name="task"
                    class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        mb-3
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Input a New Task!"
                    ></textarea>
                    <input type="submit" value="Create Task" class="bg-blue-500 hover:opacity-50 text-white py-2 px-4 rounded float-right">
                </form>
            </div>
        </div>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($tasks as $task)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $task->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $task->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $task->task }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>