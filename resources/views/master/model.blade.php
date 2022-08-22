<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/model.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="model.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<ul class="nav justify-content-center py-3">
  <li  class="nav-item">AboutMe
    <a class="nav-link"  href="{{route('mes.index')}}" >
    <img id="myImage" onmouseover="changeImage()" onmouseout="changeImage()" src="{{url('storage/images/im_off.png')}}" class="img-fluid"></a>
<script>
function changeImage() {
  var image = document.getElementById('myImage');
  if (image.src.match("on")) {
    image.src = "{{url('storage/images/im_off.png')}}";
  } else {
    image.src = "{{url('storage/images/im_on.png')}}";
  }
}
</script>
  </li>
  <li class="nav-item">MyProject
  <a class="nav-link"  href="{{route('mes.share')}}" >
  <img id="myImage1" onmouseover="changeImage1()" onmouseout="changeImage1()" src="{{url('storage/images/coaching_off.png')}}" class="img-fluid"></a>
    <script>
function changeImage1() {
  var image = document.getElementById('myImage1');
  if (image.src.match("_on")) {
    image.src = "{{url('storage/images/coaching_off.png')}}";
  } else {
    image.src = "{{url('storage/images/coaching_on.png')}}";
  }
}
</script>
  </li>
  <li class="nav-item">Plan
    <a class="nav-link" href="{{route('mes.arrange')}}">
    <img id="myImage2" onmouseover="changeImage2()" onmouseout="changeImage2()" src="{{url('storage/images/schedule_off.png')}}" class="img-fluid"></a>
    <script>
function changeImage2() {
  var image = document.getElementById('myImage2');
  if (image.src.match("_on")) {
    image.src = "{{url('storage/images/schedule_off.png')}}";
  } else {
    image.src = "{{url('storage/images/schedule_on.png')}}";
  }
}
</script>
  </li>
  <li class="nav-item">IdealJob
    <a class="nav-link" href="{{route('mes.goal')}}">
      <img id="myImage3" onmouseover="changeImage3()" onmouseout="changeImage3()" src="{{url('storage/images/goal_off.png')}}" class="img-fluid"></a>
    <script>
function changeImage3() {
  var image = document.getElementById('myImage3');
  if (image.src.match("_on")) {
    image.src = "{{url('storage/images/goal_off.png')}}";
  } else {
    image.src = "{{url('storage/images/goal_on.png')}}";
  }
}
</script>
  </li>
  <li class="nav-item">Struggle
    <a class="nav-link" href="{{route('mes.trouble')}}">
    <img id="myImage4" onmouseover="changeImage4()" onmouseout="changeImage4()" src="{{url('storage/images/brainstorm_off.png')}}" class="img-fluid"></a>
    <script>
function changeImage4() {
  var image = document.getElementById('myImage4');
  if (image.src.match("_on")) {
    image.src = "{{url('storage/images/brainstorm_off.png')}}";
  } else {
    image.src = "{{url('storage/images/brainstorm_on.png')}}";
  }
}
</script>
  </li>
  <li class="nav-item">Learned
    <a class="nav-link" href="{{route('mes.gains')}}">
    <img id="myImage5" onmouseover="changeImage5()" onmouseout="changeImage5()" src="{{url('storage/images/motivation_off.png')}}" class="img-fluid"></a>
    <script>
function changeImage5() {
  var image = document.getElementById('myImage5');
  if (image.src.match("_on")) {
    image.src = "{{url('storage/images/motivation_off.png')}}";
  } else {
    image.src = "{{url('storage/images/motivation_on.png')}}";
  }
}
</script>
  </li>
  <li class="nav-item">MyRequest
    <a class="nav-link" href="{{route('mes.say')}}">
      <img id="myImage6" onmouseover="changeImage6()" onmouseout="changeImage6()" src="{{url('storage/images/megaphone_off.png')}}" class="img-fluid"></a>
    <script>
function changeImage6() {
  var image = document.getElementById('myImage6');
  if (image.src.match("_on")) {
    image.src = "{{url('storage/images/megaphone_off.png')}}";
  } else {
    image.src = "{{url('storage/images/megaphone_on.png')}}";
  }
}
</script>
  </li>
</ul>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>