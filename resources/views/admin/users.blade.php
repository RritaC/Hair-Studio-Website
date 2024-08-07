<x-side>
    <div class="bg-blue-100 border border-gray-200 pt-2 rounded-lg">
            <div class="text-center">
                <ul class="mt-8 space-y-4  mx-auto max-w-2xl">
                    <li class="flex items-start space-x-3">
                        <svg class="h-6 w-6 text-indigo-950" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17v-6h2v6h-2zm0-8V7h2v4h-2z"/></svg>
                        <p class="text-gray-900">Here we can see all of the clients that have booked with us through $tudio!</p>
                    </li>
                </ul>
            </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <body>
    <div class="container mt-5">
        <h1 class="mb-4">User List</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bg-gray-200">First Name</th>
                <th class="bg-gray-200">Last Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</x-side>

