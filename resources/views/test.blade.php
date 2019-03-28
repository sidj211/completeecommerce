<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">

    @foreach($pro as $categories)
        <li>{{$categories->name}}</li>

        @foreach($categories->sub_category as $subcategories)

            <li>{{printf($int)}}{{$subcategories->name}}</li>


            @foreach($categories->products as $pro)
                @if($subcategories->id == $pro->sub_categories_id)


                    <li>pro name --{{$pro->name}}</li>
                @endif
            @endforeach


        @endforeach

    @endforeach

















</div>



</body>
</html>


