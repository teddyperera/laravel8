<x-layout>
    <section class="px-6 py-8">
        
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded border border-gray-200 x-1">
            <h1 class="text-center font-bold text-x1">Log in!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input type="text" name="email" id="email" value="{{old('email')}}" required class="border border-gray-400 p-2 w-full">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Login
                    </button>
                </div>

            </form>
        </main>

    </section>
</x-layout>