<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hi ...<span class="font-extrabold text-gray-600">{{ auth()->user()->name }}</span>
            </h2>
            <h2 class="font-semibold items-end text-xl text-gray-800 leading-tight">
                Total users <span class="font-extrabold text-red-600">{{ $users->count() }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <table class="border table-auto bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <thead>
                    <tr>
                        <th class="w-2/12 text-left px-4">SL No</th>
                        <th class="w-5/12 text-left px-4">Name</th>
                        <th class="w-4/12 text-left px-4">Email</th>
                        <th class="w-5/12 text-left px-10">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="border">
                        <td class="text-left py-3 px-4">{{ $user->id }}</td>
                        <td class="text-left px-4">{{ $user->name }}</td>
                        <td class="text-left px-4">{{ $user->email }}</td>
                        <td class="text-left text-sm text-gray-500 px-4">
                            {{ \Carbon\Carbon::parse($user->created_at)->diffForhumans() }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>