<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/kontakt.css', 'resources/js/app.js']) 
@endif
    <title>Document</title>
</head>
<body>
    
    <div class="w-full min-h-[400px] bg-cover bg-center p-5 text-white relative" style="background-image: url('images/city.jpg'); background-color: #575a58; mb-[+20px]">
        <div id="a1" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
         <div class="text-3xl font-bold">  Kontakt </div>
        </div>
    </div>
    
    <div id="dolnaczescy" class="w-[95%] mx-auto h-auto bg-white p-5 text-black mt-[-30px] relative z-10 rounded-t-lg">

             
        
        <div id="a2" class="font-bold mb-5 mx-[25%] mt-20">
            Bądź w kontakcie
        </div>
        <div id="a2" class="font-bold mb-5 mx-[25%]">
            Adres
        </div>
        <div id="a2" class="mb-5 mx-[25%]">
            Fundacja Głos Młodych <br/>
            62-090 Rokietnica Ul. Rolna 17d<br/>
            Tel. 794 250 440<br/>
            Numer GG: 35208545<br/>
            KRS 0000359598<br/>
            NIP 778-147-28-25<br/>
            Regon 301479604
        </div>
        <div id="a2" class=" font-bold mb-5 mx-[25%]">
            rekrutacja@fundacjaglosmlodych.org
        </div>
        <div id="a2" class=" font-bold mb-5 mx-[25%]">
            Nr Konta Bankowego : <br/> <br/>
            92 1240 1763 1111 0010 7475 8053
        </div>
        <div id="a2" class=" mb-20"> </div>
        
    
      </div>
        
      <div id="ostatnie" class="bg-gray-500 bg-cover bg-center p-5 w-[95%] gap-2 mx-auto pb-[50px]">
        <div id="aktualnosci" class="float-left w-[10%] text-left">
            <a href="{{ url('/aktualnosci') }}" class="text-white">Aktualności</a>
        </div>
        
        <div id="kontakt" class="float-left w-[10%] text-left">
            <a href="/kontakt" class="text-white">Kontakt</a>
        </div>
        
        <div id="stronaglowna" class="float-left w-[10%] text-left">
            <a href="/stronaglowna" class="text-white">Strona Główna</a>
        </div>
        
        <div id="stworzone" class="float-left w-[40%] text-white text-right">
            | Stworzone przez dk
        </div>
    </div>
    
            
      




</body>
</html>