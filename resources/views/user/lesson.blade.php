<h2>Daftar Siswa</h2>

<ul>
  @foreach ($lessons->users as $lesson)
    <li>{{$lesson->name}}- {{$lesson->pivot->created_at}} - {{$lesson->pivot->data}} </li>
  @endforeach
</ul>


<h2>daftar like</h2>
<ul>
@foreach ($lessons->likes as $like)
<li>
    {{$like->likeable_type}}
</li>
@endforeach
</ul>
<h2>daftar tag</h2>
<ul>
  @foreach ($lessons->tags as $tag)
    <li>{{$tag->name}}</li>
  @endforeach
</ul>
