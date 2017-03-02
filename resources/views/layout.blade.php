<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('parts.head')
</head>

<body id="page-top">
    @include('body.navbar')
    @include('body.header')
    @include('body.sections.about')
    @include('body.sections.timeline')
    @include('body.sections.services')
    @include('body.sections.portfolio')
    @include('body.sections.cv')
    @include('body.sections.contact')
    @include('scripts.botton-scripts')
</body>

</html>