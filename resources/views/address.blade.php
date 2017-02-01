
<h3>Addresses</h3>

<h4> {{ $addresses->address }} </h4>


@foreach($addresses->posts as $post)

   <p> Post: {{ $post->body }} -- Posted by: {{ $post->relationToUser->name }}</p>

@endforeach


