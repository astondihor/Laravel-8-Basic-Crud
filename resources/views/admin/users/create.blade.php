<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Create User') }}
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
              <div class="alert alert-danger text-red-500">
                There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif --}}

            <form action="{{ route('admin.users.store') }}" method="POST">
              @csrf

              <div class="">
                <div class="mb-4">
                  <label for="name" class="form-label">Name:</label>
                  <input class="form-input w-full @error('name') is-invalid @enderror"
                         name="name"
                         type="text"
                         value="{{ old('name') }}"
                         placeholder="Name">
                         @error('name')
                             <span class="text-red-500 italic text-sm">{{ $message }}</span>
                         @enderror
                </div>

                <div class="mb-4">
                  <label for="email" class="form-label">Email:</label>
                  <input class="form-input w-full @error('email') is-invalid @enderror"
                         name="email"
                         type="text"
                         value="{{ old('email') }}"
                         placeholder="Email" />
                         @error('email')
                             <span class="text-red-500 italic text-sm">{{ $message }}</span>
                         @enderror
                </div>

                <div class="mb-4">
                  <label for="password" class="form-label">Password:</label>
                  <input class="form-input w-full @error('password') is-invalid @enderror"
                         name="password"
                         type="password"
                          />
                         @error('password')
                             <span class="text-red-500 italic text-sm">{{ $message }}</span>
                         @enderror
                </div>

                <div class="mb-4">
                  <label for="password_confirmation" class="form-label">Password Confirmation:</label>
                  <input class="form-input w-full @error('password') is-invalid @enderror"
                         name="password_confirmation"
                         type="password"
                          />
                         @error('password')
                             <span class="text-red-500 italic text-sm">{{ $message }}</span>
                         @enderror
                </div>

                <div class="flex items-center justify-end space-x-3 mt-8">
                  <button class="rounded-lg bg-indigo-500 px-4 py-2 text-base font-medium leading-6 text-white/70 hover:bg-indigo-600 hover:text-white"
                          type="submit">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</x-app-layout>
