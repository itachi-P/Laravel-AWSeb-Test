{{-- 仮実装 --}}

<h3>{{ $post->id}}<h3>
<h1>{{ $post->title }}</h1>
<p>{!! nl2br(e($post->body)) !!}</p>