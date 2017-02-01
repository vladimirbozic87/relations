
@foreach($posts as $post)

   <p>{{ $post->relationToUser->name }} -- {{ $post->body }} </p>

       <ul>
	   @foreach($post->comments as $comment)

	     <li>{{ $comment->body }} -- Commented By: {{ $comment->getUser->name }}</li>

	   @endforeach
	  </ul>

	  <hr>

@endforeach


