<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{$seo->title}}</title>
    <meta name="description" content="{{$seo->description}}"/>
    <meta name="keywords" content="{{$seo->keywords}}"/>

    <meta name="og:site_name" content="{{$seo->ogSiteName}}"/>
    <meta name="og:url" content="{{$seo->ogUrl}}"/>
    <meta name="og:title" content="{{$seo->ogTitle}}"/>
    <meta name="og:image" content="{{$seo->ogImage}}"/>
    <meta name="og:description" content="{{$seo->ogDescription}}"/>

</head>

<body class="d-flex flex-column h-100">


<div class="" id="content-div">
    @yield('content')
</div>

</body>
</html>
