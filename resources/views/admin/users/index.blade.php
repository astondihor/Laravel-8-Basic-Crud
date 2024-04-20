<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Users') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

      @if ($message = Session::get('success'))
        <div class="alert alert-success mb-8">
          <p>{{ $message }}</p>
        </div>
      @endif

      <div class="mb-8">
        <a class="inline-flex items-center justify-center rounded-md border border-green-600/75 bg-green-500 px-3 py-2 text-base font-semibold text-green-100 hover:bg-green-600 hover:text-white/90"
           href="{{ route('admin.users.create') }}"> Create New user</a>
      </div>

      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 bg-white py-6">

          <table class="w-full table-auto text-sm text-slate-600">
            <thead>
              <tr class="border-b-2 border-blue-200 bg-blue-50/75">
                <th class="whitespace-nowrap px-2 text-left">No</th>
                <th class="whitespace-nowrap px-2 text-left">Name</th>
                <th class="whitespace-nowrap px-2 text-left">Email</th>
                <th width="280px">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-300/75 border-b-2 border-slate-300/75">
              @foreach ($users as $user)
                <tr>
                  <td class="whitespace-nowrap px-2 py-1 text-left">{{ ++$i }}</td>
                  <td class="whitespace-nowrap px-2 py-1 text-left">{{ $user->name }}</td>
                  <td class="whitespace-nowrap px-2 py-1 text-left">{{ $user->email }}</td>
                  <td class="whitespace-nowrap px-2 py-1 text-left">
                    <div class="flex items-center justify-end space-x-1">
                      <a class="rounded bg-sky-500 px-1.5 py-0.5 text-xs font-medium leading-4 text-white/60 hover:bg-sky-600 hover:text-white"
                         href="{{ route('admin.users.show', $user->id) }}">Show</a>
                      <a class="rounded bg-indigo-500 px-1.5 py-0.5 text-xs font-medium leading-4 text-white/60 hover:bg-indigo-600 hover:text-white"
                         href="{{ route('admin.users.edit', $user->id) }}">Edit</a>

                      <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="rounded bg-red-500 px-1.5 py-0.5 text-xs font-medium leading-4 text-white/60 hover:bg-red-600 hover:text-white"
                                type="submit">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          {!! $users->links() !!}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
