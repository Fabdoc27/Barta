@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    {{-- Profile Info --}}
    <section class="flex flex-col items-center justify-center p-8 space-y-6 bg-white border-2 border-gray-800 rounded-xl">
        <div class="flex flex-col items-center justify-center gap-4 text-center">
            <div>
                <h1 class="mb-2 font-bold md:text-2xl">{{ $user->name }}</h1>
                <p class="text-gray-700">{{ $user->bio }}</p>
            </div>
        </div>

        {{-- Edit Profile Button  --}}
        @if ($user && auth()->user()->id === $user->id)
            <a href="{{ route('profile.edit', $user->username) }}" type="button"
                class="flex items-center gap-2 px-4 py-2 font-semibold text-gray-700 bg-gray-100 rounded-full hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125">
                    </path>
                </svg>
                Edit Profile
            </a>
        @endif
    </section>

    @foreach ($posts as $post)
        {{-- Barta Single Post Card --}}
        @include('post.partials.single-post', ['post' => $post])
    @endforeach
@endsection
