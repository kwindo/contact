<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>
    </head>
    <body class="antialiased">
        <h1>Contact Us</h1>
        <form action="{{route('contact')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name Please">
            <input type="email" name="email" placeholder="Your Email Please">
            <textarea name="message" cols="30" rows="10" placeholder="Your Message Please"></textarea>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
