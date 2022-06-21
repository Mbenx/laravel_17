<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>{{$judul}}</title>
    <!-- <title> -->
        <?php // echo $judul?>
    <!-- </title> -->
</head>
<body>
    <h1>{{$bodyTitle}}</h1>

    <?php    
    if ($name == "heru") {
        echo "Hi ".$name;
    } else {
        echo "Hallo ".$name;
    }    
    ?>

    
    <!-- condition -->
    @if ($name == "heru")
        <h2> Hi {{$name}} </h2>
    @else
        <h2> Hallo {{$name}} </h2>
    @endif    

    <!-- loop -->
    @for ($i=0; $i <= 10; $i++)
        <h5>{{$i}}</h5>
    @endfor
    
</body>
</html>