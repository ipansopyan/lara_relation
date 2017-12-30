 <h2>haii {{$user->name}}</h2> <p>|| no passport : {{$user->passport->no_pass}} </p>
<h2>Daftar Forum</h2> <br>
<ul>
  @foreach ($user->forums as $forum)
    <li>{{$forum->title}}</li>
    <li>{{$forum->body}}</li>
  @endforeach
</ul>


<h2>Daftar Kelas</h2> <br>
<ul>
  @foreach ($user->lessons as $lesson)
    <li>{{$lesson->tilte}}</li>
  @endforeach
</ul>
