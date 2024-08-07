<x-layout>

    <div class="bg-black  flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-black py-8 px-6 shadow-md rounded-lg max-w-lg w-full">
            <h1 class="pb-6 pt-6 font-bold text-4xl" >To book any appointment you have to register</h1>
            <h1 class="pb-6 pt-6 font-bold text-2xl" >Register</h1>

            <form method="POST" action="/register">
                @csrf

                <div class="space-y-6 text-white">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                        <x-form-field>
                            <x-form-label for="first_name" class="text-white">First Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input class="text-white" name="first_name" id="first_name" placeholder="Jane" required />
                                <x-form-error name="first_name" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="last_name" class="text-white">Last Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input class="text-white" name="last_name" id="last_name" placeholder="Smith" required />
                                <x-form-error name="last_name" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="email" class="text-white">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input class="text-white" name="email" id="email" type="email" placeholder="jane@example.com" required />
                                <x-form-error name="email" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password" class="text-white">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input class="text-white" name="password" id="password" type="password" required />
                                <x-form-error name="password" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password_confirmation" class="text-white">Confirm Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input class="text-white" name="password_confirmation" id="password_confirmation" type="password" required />
                                <x-form-error name="password_confirmation" />
                            </div>
                        </x-form-field>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <a href="/" class="inline-block bg-yellow-600 text-white px-3 py-2 rounded-lg">Cancel</a>
                    <x-form-button>Register</x-form-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
