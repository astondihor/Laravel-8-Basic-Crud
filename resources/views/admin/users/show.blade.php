<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Show User Details') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

      <div class="mb-8">
        <a class="inline-flex items-center justify-center px-3 py-2 rounded-md border border-slate-300/75 font-semibold text-base bg-white hover:bg-slate-100" href="{{ route('admin.users.index') }}"> Back</a>
      </div>

      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 bg-white p-6">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Created At:</strong>
                {{ $user->created_at }}
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Updated At:</strong>
                {{ $user->updated_at }}
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
