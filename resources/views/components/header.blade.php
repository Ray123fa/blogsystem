<div
  class="navbar bg-base-300 bg-opacity-50 backdrop-blur-md mx-auto px-2 sm:px-4 shadow-sm shadow-base-300 dark:shadow-slate-50 top-0 right-0 left-0 fixed z-[99]">
  {{-- Mobile --}}
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-200 rounded-box z-[1] mt-5 w-52 p-2 shadow">
        <li><x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link></li>
        <li><x-nav-link :active="request()->is('about')" href="about">About</x-nav-link></li>
        <li><x-nav-link :active="request()->is('blog')" href="blog">Blog</x-nav-link></li>
        <li><x-nav-link :active="request()->is('contact')" href="contact">Contact</x-nav-link></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">myBlog</a>
  </div>

  {{-- Desktop --}}
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link></li>
      <li><x-nav-link :active="request()->is('about')" href="about">About</x-nav-link></li>
      <li><x-nav-link :active="request()->is('blog')" href="blog">Blog</x-nav-link></li>
      <li><x-nav-link :active="request()->is('contact')" href="contact">Contact</x-nav-link></li>
    </ul>
  </div>
  {{-- End Desktop --}}

  <div class="navbar-end">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Profile Picture" src="https://ui-avatars.com/api/?name=Rayhan+Faridh" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-200 rounded-box z-[1] mt-5 w-52 p-2 shadow">
        <li>
          <a class="justify-between">Profile</a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>
