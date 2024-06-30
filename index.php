<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hava Durumu Uygulaması</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>    
</head>
  <body>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5">
            <h1>Hava Durumu Uygulaması</h1>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label" style="font-weight: bold; text-transform: uppercase;">Şehir :</label>
            <input type="text" class="form-control" id="sehir" name="sehir" value="Sivas" placeholder="Şehir Giriniz">
            </div>
            <div class="mb-3">
                <button id="HavaDurumu" class="btn btn-primary" style="text-transform: uppercase; font-weight: bold;">Hava Durumu</button>
            </div>
            <div id="result">
            <hr>

            </div>


        </div>
        <div class="col-md-4"></div>
    </div>




    <script>
        $('#HavaDurumu').on('click',function(){
            var sehir = $('#sehir').val();
            $.ajax({
                url:"api.php",
                type:"post",
                data:{city:sehir},
                success:function(data){
                    $('#result').html(data);
                } ,
                error:function(data){
                    console.log(data);
                }
            });

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>