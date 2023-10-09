<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <br><button class="btn btn-success mt=3" ><a href="{{ route('koleksi.registrasi') }}">Tambah Koleksi</a></button></br>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Collections</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Quantity</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collections as $collection)
                            <tr>
                                <td>{{ $collection->id }}</td>
                                <td>{{ $collection->nameKoleksi }}</td>
                                <td>
                                    @if ($collection->jenisKoleksi == 1)
                                        Buku
                                    @elseif ($collection->jenisKoleksi == 2)
                                        Majalah
                                    @elseif ($collection->jenisKoleksi == 3)
                                        Cakram Digital
                                    @else
                                        Unknown
                                    @endif
                                </td>
                                <td>{{ $collection->jumlahKoleksi }}</td>
                                <td>{{ $collection->created_at }}</td>
                                <td>{{ $collection->updated_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('koleksi.infoKoleksi', $collection) }}" class="btn btn-info">View</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- 6706220149_Muhammad Kafaby_4604 -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
