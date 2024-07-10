<x-app-layout title="Blog">
  <x-card-layout>
    @foreach ($posts as $post)
      <x-card id="{{ $post->id }}" title="{{ $post->title }}" image="{{ $post->image }}"
        desc="{{ $post->description }}"></x-card>
    @endforeach
  </x-card-layout>
</x-app-layout>
