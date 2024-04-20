<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Edit User') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

      <div class="mb-8">
        <a class="inline-flex items-center justify-center rounded-md border border-slate-300/75 bg-white px-3 py-2 text-base font-semibold hover:bg-slate-100"
           href="{{ route('admin.users.index') }}"> Back</a>
      </div>

      <div class="max-w-lg">

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="border-b border-gray-200 bg-white p-6">

            {{-- @if ($errors->any())
              <div class="alert alert-danger">
                There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif --}}

            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="">
                <div class="mb-4">
                  <label class="form-label" for="name">Name:</label>
                  <input class="form-input @error('name') is-invalid @enderror w-full"
                         name="name"
                         type="text"
                         value="{{ old('name') ?: $user->name }}"
                         placeholder="Name">
                  @error('name')
                    <span class="text-sm italic text-red-500">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-4">
                  <label class="form-label" for="email">Email:</label>
                  <input class="form-input @error('email') is-invalid @enderror w-full"
                         name="email"
                         type="text"
                         value="{{ old('email') ?: $user->email }}"
                         placeholder="Email" />
                  @error('email')
                    <span class="text-sm italic text-red-500">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-4">
                  <label class="form-label" for="password">Password:</label>
                  <input class="form-input @error('password') is-invalid @enderror w-full"
                         name="password"
                         type="password" />
                  @error('password')
                    <span class="text-sm italic text-red-500">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-4">
                  <label class="form-label" for="password_confirmation">Password Confirmation:</label>
                  <input class="form-input @error('password') is-invalid @enderror w-full"
                         name="password_confirmation"
                         type="password" />
                  @error('password')
                    <span class="text-sm italic text-red-500">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mt-8 flex items-center justify-end space-x-3">
                  <button class="rounded-lg bg-indigo-500 px-4 py-2 text-base font-medium leading-6 text-white/70 hover:bg-indigo-600 hover:text-white"
                          type="submit">Update</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
