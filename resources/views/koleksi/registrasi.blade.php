<x-guest-layout>
    <form method="POST" action="{{ route('koleksi.storeKoleksi') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nameKoleksi" :value="__('Name Koleksi')" />
            <x-text-input id="nameKoleksi" class="block mt-1 w-full" type="text" name="nameKoleksi" :value="old('nameKoleksi')" required autofocus />
            <x-input-error :messages="$errors->get('nameKoleksi')" class="mt-2" />
        </div>

        <!-- Jenis Koleksi -->
        <div>
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <select name="jenisKoleksi" id="jenisKoleksi" class="block mt-1 w-full" required>
                <option value="1">Buku</option>
                <option value="2">Majalah</option>
                <option value="3">Cakram Digital</option>
                <!-- Anda dapat menambahkan lebih banyak opsi sesuai kebutuhan -->
            </select>
            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
        </div>

        <!-- Jumlah Koleksi -->
        <div>
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autofocus />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>

        <!-- ... tambahkan input lainnya sesuai kebutuhan Anda ... -->

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
