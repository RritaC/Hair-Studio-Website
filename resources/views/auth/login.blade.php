<x-layout>
    <h1 class="pb-6 pt-6 font-bold text-3xl">Log In</h1>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12 text-white">
            <div class=" pb-12">
                <div class="grid grid-cols-2 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email" class="text-white">Email</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" :value="old('email')" required />

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password" class="text-white ">Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required />

                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="inline-block bg-yellow-600 text-white px-3 py-2 rounded-lg">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>
