# Hava Durumu Uygulaması

Bu proje, bir hava durumu uygulaması geliştirmek için temel bir şablondur. Bu uygulama, kullanıcıların belirli bir konum için güncel hava durumu bilgilerini alabilecekleri bir arayüz sunmaktadır.
NOT: Ücretsiz API a https://openweathermap.org/ sitesine kayıt olarak alabilirsiniz 😊

## Başlarken

Bu adımlar, projeyi yerel bir makinede çalıştırmanızı sağlayacaktır.

## Gereksinimler

Bu projenin çalışması için aşağıdaki yazılımların sisteminizde yüklü olması gerekmektedir:
- Bir metin düzenleyici (Notepad++, Sublime Text, VS Code, vb.)
- Bir web tarayıcısı (Google Chrome, Mozilla Firefox, vb.)
- Bir web sunucusu (XAMPP, WAMP, vb.)
- OpenWeatherMap API Key

## Kurulum

1. Bu projeyi yerel bir klasöre klonlayın ya da zip olarak indirin:
    ```bash
    git clone https://github.com/DogusDeniz3558/Hava-Durumu-Uygulamasi.git
    ```

2. Web sunucusu yazılımınızı kullanarak, projeyi sunucunuzun kök dizinine yerleştirin.

3. OpenWeatherMap API Key'inizi `api.php` dosyasına ekleyin:
    ```php
    $apiKey = 'YOUR_OPENWEATHERMAP_API_KEY';
    ```

4. Web tarayıcınızda aşağıdaki URL'yi açın:
    ```url
    localhost/Hava-Durumu-Uygulamasi/
    ```

5. Artık hava durumu uygulamasını kullanmaya başlayabilirsiniz.

## Kullanım

Hava Durumu Uygulaması, kullanıcıların şehir adını girerek güncel hava durumu bilgilerini alabilecekleri basit bir arayüz sunar. Kullanıcılar şehir adını girdikten sonra "Getir" düğmesine tıklayarak ilgili şehrin hava durumu bilgilerini görüntüleyebilirler.

## Katkıda Bulunma

Bu projeye katkıda bulunmak isterseniz, aşağıdaki adımları takip edebilirsiniz:
1. Bu projeyi fork edin.
2. Kendi yerel makinenizde fork edilen projeyi klonlayın.
3. Değişikliklerinizi yapın ve commit'leyin.
4. Yeni bir branch oluşturun:
    ```bash
    git branch yeni-ozellik
    ```
5. Branch'inize geçin:
    ```bash
    git checkout yeni-ozellik
    ```
6. Değişikliklerinizi push edin:
    ```bash
    git push origin yeni-ozellik
    ```
7. Pull isteği (Pull Request) gönderin.

## Lisans

Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasını inceleyebilirsiniz.

Teşekkürler
