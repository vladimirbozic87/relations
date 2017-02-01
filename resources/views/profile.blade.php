<h3>Profile Page</h3>

<p>Username: {{ $user->name }}</p>

<p>Email: {{ $user->email }}</p>

<p>Address: {{ $user->getAddresses->address }} </p>

<p>Role:</p>

    <ul>

   @foreach($user->getRoles as $role)

   		<li> {{ $role->name }} </li>

   @endforeach

   </ul>


<h3>Posts:</h3>

@foreach($user->getPost as $post)

   <p> {{ $post->body }} </p>

      <ul>
	   @foreach($post->comments as $comment)

	     <li>{{ $comment->body }} -- Commented By: {{ $comment->getUser->name }}</li>

	   @endforeach
     </ul>

   <hr>

@endforeach

@foreach($user->comments as $comment)

   <p> {{ $comment->body }} </p>

@endforeach

<hr>
<b>All Comment by This User</b>

@foreach($user->commentsByUser as $comment)

   <p> {{ $comment->body }} </p>

@endforeach