<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake news Generation </title>
</head>
<body>
    <h1> Fake News Generation</h1>
    <form  method="POST" action="{{route('result')}}">
     @csrf
       <label>Create 5 fake news topics about</label>
       <br><br>
       <input type="text" name="topic" placeholder="facke news topic">
       <br><br>
       <button>Generation</button>
       <br>
    </form>
    @if (isset($result))
      <h3>Output:</h3>
      <div style="white-space:pre-line">{{$result}} </div>
    @endif  
</body>
</html>