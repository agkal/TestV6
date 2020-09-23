<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google drive file</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        

    </head>

    <body>
            <div class="container">
                <div class="row">
                    <div class= "col-12">
                    <br><br><br> 
                    <div class="card-header"><h3 style = "text-align:center; color:blue;">Upload file here to upload over Google Drive</h3></div>
                    
                        <form action ="upload" method ="post" enctype= "multipart/form-data">
                        @csrf
                        <input type="file" class ="form-control" name = "thing"> 
                        <br>
                        <input type="submit" class ="btn btn-sm btn-block btn-danger" 
                        value="upload"> 
                    </div>
                </div>

                <div class="links">
                </div>
                </div>
    </body>
</html>
