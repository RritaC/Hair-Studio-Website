<x-side>
    <x-slot name="title">Admin Dashboard</x-slot>

    <div class="bg-yellow-200 p-6 rounded-lg shadow-lg">
        <!-- Filter Section -->
        <div class="mb-8 flex space-x-4 items-center">
            <h2 class="text-xl font-semibold mb-4">Filter Todos</h2>
            <select id="filter-select" class="p-2 border rounded-lg">
                <option value="all">All</option>
                <option value="this-week">This Week</option>
                <option value="next-week">Next Week</option>
            </select>
        </div>

        <!-- Todos Section -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">My Todos</h2>
            <div class="mb-4">
                <!-- Todo Form -->
                <form id="todo-form" class="flex space-x-2">
                    <input type="text" id="todo-input" placeholder="Add a new task" class="flex-grow p-2 border rounded-lg">
                    <select id="todo-timeframe" class="p-2 border rounded-lg">
                        <option value="this-week">This Week</option>
                        <option value="next-week">Next Week</option>
                    </select>
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Add</button>
                </form>
            </div>

            <!-- Todo List -->
            <ul id="todo-list" class="space-y-2">
                <!-- Todo items will be inserted here dynamically -->
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6 mt-8">
        <!-- Break Logging Card -->
        <div class="bg-pink-200 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Log Breaks</h2>
            <form id="break-form">
                <label for="break-time" class="block text-sm font-medium text-gray-700 mb-2">Time:</label>
                <input type="time" id="break-time" class="form-input block w-full mb-4 rounded-lg" />

                <button type="submit" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                    Log Break
                </button>
            </form>

            <!-- Break List -->
            <ul id="break-list" class="mt-4 space-y-2">
                <!-- Break items will be inserted here dynamically -->
            </ul>
        </div>

        <!-- Finished Clients Card -->
        <div class="bg-blue-200 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Finished Clients</h2>
            <form id="clients-form">
                <label for="clients-count" class="block text-sm font-medium text-gray-700 mb-2">Clients Served Today:</label>
                <input type="number" id="clients-count" class="form-input block w-full mb-4 rounded-lg" placeholder="  Enter number" />

                <div class="mt-2">
                    <label for="clients-names" class="inline-block text-sm font-medium text-gray-700">And</label>
                    <input type="text" id="clients-names" class="form-input block w-full mt-2 mb-4 rounded-lg" placeholder="  Enter names separated by commas" />
                </div>

                <button type="submit" class="inline-block bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                    Update Count
                </button>
            </form>

            <!-- Clients List -->
            <ul id="clients-list" class="mt-4 space-y-2">
                <!-- Client items will be inserted here dynamically -->
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const todoForm = document.getElementById('todo-form');
            const todoInput = document.getElementById('todo-input');
            const todoTimeframe = document.getElementById('todo-timeframe');
            const todoList = document.getElementById('todo-list');
            const filterSelect = document.getElementById('filter-select');

            // Function to add a new todo
            function addTodo() {
                const todoText = todoInput.value.trim();
                const timeframe = todoTimeframe.value;

                if (todoText === '') return;

                // Create new todo item
                const todoItem = document.createElement('li');
                todoItem.className = `bg-white p-3 rounded-lg shadow ${timeframe}`;
                todoItem.dataset.timeframe = timeframe;
                todoItem.innerHTML = `
                    <span>${todoText} (${timeframe})</span>
                    <button class="ml-4 text-red-500 hover:text-red-700" onclick="this.parentElement.remove()">Delete</button>
                `;

                // Append to the list
                todoList.appendChild(todoItem);

                // Clear input fields
                todoInput.value = '';
                todoTimeframe.value = 'this-week';
            }

            // Add todo on form submit
            todoForm.addEventListener('submit', function(event) {
                event.preventDefault();
                addTodo();
            });

            // Filter todos based on selected timeframe
            filterSelect.addEventListener('change', function() {
                const filterValue = filterSelect.value;
                const todos = todoList.querySelectorAll('li');

                todos.forEach(todo => {
                    if (filterValue === 'all' || todo.dataset.timeframe === filterValue) {
                        todo.style.display = '';
                    } else {
                        todo.style.display = 'none';
                    }
                });
            });

            // Break handling
            const breakForm = document.getElementById('break-form');
            const breakTimeInput = document.getElementById('break-time');
            const breakList = document.getElementById('break-list');

            function addBreak() {
                const breakTime = breakTimeInput.value.trim();

                if (breakTime === '') return;

                // Create new break item
                const breakItem = document.createElement('li');
                breakItem.className = 'bg-white p-3 rounded-lg shadow';
                breakItem.innerHTML = `
                    <span>${breakTime}</span>
                    <button class="ml-4 text-red-500 hover:text-red-700" onclick="this.parentElement.remove()">Delete</button>
                `;

                // Append to the list
                breakList.appendChild(breakItem);

                // Clear input fields
                breakTimeInput.value = '';
            }

            breakForm.addEventListener('submit', function(event) {
                event.preventDefault();
                addBreak();
            });

            // Clients handling
            const clientsForm = document.getElementById('clients-form');
            const clientsCountInput = document.getElementById('clients-count');
            const clientsNamesInput = document.getElementById('clients-names');
            const clientsList = document.getElementById('clients-list');

            function addClients() {
                const count = clientsCountInput.value.trim();
                const names = clientsNamesInput.value.trim();

                if (count === '' && names === '') return;

                let clientInfo = '';

                if (count !== '') {
                    clientInfo = `Number of clients: ${count}`;
                } else if (names !== '') {
                    clientInfo = `Client names: ${names.split(',').map(name => name.trim()).join(', ')}`;
                }

                // Create new client item
                const clientItem = document.createElement('li');
                clientItem.className = 'bg-white p-3 rounded-lg shadow';
                clientItem.innerHTML = `
                    <span>${clientInfo}</span>
                    <button class="ml-4 text-red-500 hover:text-red-700" onclick="this.parentElement.remove()">Delete</button>
                `;

                // Append to the list
                clientsList.appendChild(clientItem);

                // Clear input fields
                clientsCountInput.value = '';
                clientsNamesInput.value = '';
            }

            clientsForm.addEventListener('submit', function(event) {
                event.preventDefault();
                addClients();
            });
        });
    </script>
</x-side>
