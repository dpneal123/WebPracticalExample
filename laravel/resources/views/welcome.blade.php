<html>

<h1>{{ $title }}</h1>

@foreach($visitors as $visitor)
<h1>{{ $visitor->name }}</h1>
<p>{{ $visitor->comments }}</p>
@endforeach

</html>
