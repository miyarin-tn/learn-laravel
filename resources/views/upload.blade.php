<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upload file</title>
    </head>
    <body>
        <form action="{{ route('PostUpload') }}" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Upload">
        </form>
    </body>
</html>