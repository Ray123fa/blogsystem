<x-app-layout>
  <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-base-200 overflow-hidden shadow-xl rounded-lg">
        <div class="p-6 sm:px-20 bg-base-200 border-b border-gray-200">
          <div class="flex justify-center w-full">
            <img src="{{ $post['image'] }}" alt="Logo" class="block w-full md:w-[70%]" />
          </div>

          <div class="mt-8 text-2xl">
            {{ $post['title'] }}
          </div>

          <div class="mt-6 text-gray-500">
            {{ $post['desc'] }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
