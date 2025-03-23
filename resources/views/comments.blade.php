@extends('layouts.app')

@section('content')
@include('hader')

<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-teal-600">Комментарии студентов</h2>
        <p class="text-lg text-gray-600 mt-2">Присоединяйтесь к обсуждениям, делитесь мнениями и помогайте друг другу!</p>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded-md mb-6 shadow-md">
            <strong>Успех!</strong> {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        @auth
            <h3 class="text-xl font-semibold mb-4 text-teal-600">Оставьте комментарий</h3>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <textarea name="content" class="w-full border border-gray-300 rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-teal-500" rows="6" placeholder="Напишите свой комментарий..." required></textarea>
                <button type="submit" class="mt-4 bg-teal-600 text-white px-6 py-2 rounded-lg hover:bg-teal-700 transition-all duration-300 transform hover:scale-105">Отправить</button>
            </form>
        @else
            <p class="text-gray-600 mb-4">Войдите, чтобы оставить комментарий.</p>
        @endauth
    </div>

    <div class="space-y-6">
        @foreach($comments as $comment)
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-teal-600 text-white rounded-full flex items-center justify-center text-2xl mr-4">
                        {{ substr($comment->user->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-teal-600">{{ $comment->user->name }}</p>
                        <p class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <p class="text-gray-700">{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>

    <!-- Страница пагинации (если нужно) -->
    <div class="mt-6">
        {{ $comments->links() }}
    </div>
</div>

@include('footer')
@endsection
