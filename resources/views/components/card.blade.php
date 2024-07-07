@props(['title', 'image', 'desc', 'cta'])

<div class="flex justify-center">
  <div class="card card-compact bg-base-100 w-full shadow-md shadow-slate-200 dark:shadow-gray-500">
    <figure>
      <img src="{{ $image }}" alt="{{ $title }}" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">{{ $title }}</h2>
      <p>{{ $desc }}</p>
      <div class="card-actions justify-end">
        <button class="btn btn-sm btn-primary">{{ $cta }}</button>
      </div>
    </div>
  </div>
</div>
