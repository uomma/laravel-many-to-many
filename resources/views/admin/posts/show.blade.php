@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-start">

            <div>

                <div>
                    @if ($post->cover_img)
                        <img src="{{asset("storage/$post->cover_img")}}" alt="{{ $post->title }}">
                                                
                    @endif
                </div>
                <div>
                    {{ $post->title }}

                </div>
                <div>
                    {{ $post->caption }}

                </div>
                <div>
                    @forelse  {{ $post->$technologies as $technology }}
                            {{$technologies->name}}
                    @empty
                        non ci sono technologies per sto post
                    @endforelse

                </div>
            </div>

        </div>
    </div>
@endsection
