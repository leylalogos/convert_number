<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container ">
            <div class="row">
                <div class="col-6">
                    <div class=" card card-header mt-5" style="background:gold;">
                     فرم ورودی
                    </div>
        <form action="" method="get">
            @csrf
            number 1:<input type="text" name="num1"  class="form-control">
           number 2: <input type="text" name="num2" class="form-control">
           <input type="submit" value="ارسال" class="btn btn-success"><br>
           result answer:<input type="text"  class="form-control" value="{{$sum}} "disabled>
        
        </div>
        </div>
        </div>
        </form>
    </body>
</html>