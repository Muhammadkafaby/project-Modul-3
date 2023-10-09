
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Birth Date</th>
                                <th>Agama</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>

<tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->fullName }}</td>
                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                <td>{{ $user->address }}</td>
                                <td><a href="tel:{{ $user->phoneNumber }}">{{ $user->phoneNumber }}</a></td>
                                <td>{{ $user->birthDate }}</td>
                                <td>{{ $user->Agama }}</td>
                                <td>
                                    @if ($user->JenisKelamin == 1)
                                        Laki-laki
                                    @elseif ($user->JenisKelamin == 2)
                                        Perempuan
                                    @else
                                        dan lain-lain
                                    @endif
                                </td>
                                <td>
                                    <!-- 6706220149_Muhammad Kafaby_4604 -->
</tr>
</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
