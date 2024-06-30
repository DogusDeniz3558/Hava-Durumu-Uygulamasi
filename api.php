<?php 

if(empty($_POST['city'])){
echo "<div class='alert alert-danger'>Lütfen bir şehir giriniz'</div>";
exit();
}

if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $apiKey = 'Your_Api_Key'; // OpenWeatherMap API anahtarınızı buraya ekleyin
    $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=tr";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data['cod'] == 200) {
        $weather = "<div class='card mb-3' style='max-width: 540px;'>
                      <div class='row g-0'>
                      <div style='text-align: right; padding: 10px; font-size: 20px; font-weight: bold; color: red; cursor: pointer;' onclick='this.parentNode.remove();' >X</div>

                        <div class='col-md-4' style='display: flex; justify-content: center; align-items: center;'>
                          <img src='https://www.pngall.com/wp-content/uploads/11/Weather-PNG-Background.png' height='100px' width='100px' class='img-fluid rounded-start' alt='Hava Durumu'>
                        </div>
                        <div class='col-md-8'>
                          <div class='card-body'>
                            <h5 class='card-title'>" . $data['name'] . "</h5>
                            <p class='card-text'>Sıcaklık: " . $data['main']['temp'] . "°C</p>
                            <p class='card-text'>Hava Durumu: " . $data['weather'][0]['description'] . "</p>
                            <p class='card-text'>Nem: " . $data['main']['humidity'] . "%</p>
                            <p class='card-text'>Rüzgar Hızı: " . $data['wind']['speed'] . " m/s</p>
                          </div>
                        </div>
                      </div>
                    </div>";
        echo $weather;
    } else {
        echo "<div class='alert alert-danger' role='alert'>
                Hava durumu bilgisi alınamadı. Lütfen geçerli bir şehir adı girin.
              </div>";
    }
} else {
    echo "<div class='alert alert-warning' role='alert'>
            Şehir adı girilmedi.
          </div>";
}





//https://api.openweathermap.org/data/3.0/onecall?lat={lat}&lon={lon}&exclude={part}&appid={API key}

?>