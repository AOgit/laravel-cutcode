@extends('layout.admin')

@section('title', isset($post) ? "Редактировать статью с id {$post->id}" : 'Добавить статью')

@section('content')
                        <div class="container mx-auto px-6 py-8">
                            <h3 class="text-gray-700 text-3xl font-medium">{{ isset($post) ? "Редактировать статью с id {$post->id}" : 'Добавить статью' }}</h3>

                            <div class="mt-8">

                            </div>

                            <div class="mt-8">
                                <form enctype="multipart/form-data" method="POST" action="{{ isset($post) ? route("admin.posts.update", $post->id) : route("admin.posts.store")  }}" class="space-y-5 mt-5">
                                    @csrf

                                    @if (isset($post))
                                       @method("PUT")
                                    @endif



                                    <input @if (isset($post)) value="{{$post->title}}" @endif name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" />
                                    @error('title')
                                        <p class="text-red-500">{{ $message }} </p>
                                    @enderror

                                    <input @if (isset($post)) value="{{$post->preview}}" @endif name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Краткое описание" />
                                    @error('preview')
                                        <p class="text-red-500">{{ $message }} </p>
                                    @enderror

                                    <input @if (isset($post)) value="{{$post->description}}" @endif name="description" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Описание" />
                                    @error('description')
                                        <p class="text-red-500">{{ $message }} </p>
                                    @enderror

                                    @if (isset($post) && $post->thumbnail)
                                        <div>
                                            <img class="h-64 w-64" src="/storage/posts/{{ $post->thumbnail }}">
                                        </div>
                                    @endif

                                    <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />
                                    @error('thumbnail')
                                        <p class="text-red-500">{{ $message }} </p>
                                    @enderror

                                    <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
                                </form>
                            </div>
                        </div>
@endsection
