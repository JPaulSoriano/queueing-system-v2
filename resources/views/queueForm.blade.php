<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="uppercase text-2xl font-black mb-6">Get Your Queue Number</h1>
            <form method="POST" action="{{ route('getQueue') }}">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <x-input-label for="dept" :value="__('Department')" />
                        <x-select id="dept" name="dept" class="block w-full">
                            <option>Registrar</option>
                            <option>Cashier</option>
                            <option>SAO</option>
                            <option>ACAD</option>
                        </x-select>
                    </div>
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" required placeholder="Name"
                            class="block w-full" />
                    </div>
                </div>
                <div class="flex justify-end mt-2">
                    <x-primary-button type="submit">Get Queue</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
