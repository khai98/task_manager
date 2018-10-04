<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elegant Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<h1>ADD FORM</h1>
<form class="cf" method="post">
    <div class="half left cf">
        <input type="text"  name="NAME" placeholder="NAME">
        <input type="email" name="ADDRESS" placeholder="ADDRESS">
        <input type="text"  name="PHONE" placeholder="PHONE">
        <input type="text"  name="EMAIL" placeholder="EMAIL">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="submit">

</form>
</body>
</html>
