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
         <div class="text-3xl font-bold">  Aktualności </div>
        </div>
    </div>
    
    <div id="dolnaczescy" class="w-[95%] mx-auto h-auto bg-white p-5 text-black mt-[-30px] relative z-10 rounded-t-lg">

             <div class=" text-3xl text-center font-bold mb-5 mx-[25%]">Aktualności <hr class="color:orange"/> </div>
        
      
        



<div class="mt-5 mx-[25%]"> 
    
    <div class="mt-10 mb-10">
 

        
        <div class="flex space-x-4 justify-between">
            <!-- Pierwszy blok -->
            <div class="w-[30%] bg-white p-5 shadow-lg">
                <div class="mb-5">
                    <img src="{{ asset('images/praco2.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                </div>
                <a href="dodatek" class="text-purple-500 text-left mt-5 font-bold">BEZ KATEGORII</a>
                <div class="text-center mt-5 mb-5 font-bold">
                    <h6><a href="dodatek">AGROTURYSTYKA JAKO FORMA BIZNESU</a></h6> 
                </div>
                <div class="text-center"> 
                    Działalność agroturystyczna prowadzona przez rolnika na terenie należącego do niego gospodarstwa rolniczego nie podlega rejestracji. Przysługuje w takim przypadku zwolnienie podatkowe lub preferencyjne formy opodatkowania. Agroturystyka zwolniona jest również ze spełnienia warunków dla organizacji us <a href="dodatek" class="text-blue-500 hover:text-blue-700">Więcej...</a>
                </div>
            </div>

            <!-- Drugi blok -->
            <div class="w-[30%] bg-white p-5 shadow-lg">
                <div class="mb-5">
                    <img src="{{ asset('images/dodatek.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                </div>
                <a href="pracujesz" class="text-blue-500 text-left mt-5 font-bold">BEZ KATEGORII</a>
                <div class="text-center mt-5 mb-5 font-bold">
                    <h6><a href="pracujesz">Pracujesz w porze nocnej? Sprawdź, w jakiej wysokości przysługuje Ci dodatek!</a></h6> 
                </div>
                <div class="text-center"> 
                    Pracujący w porze nocnej mają prawo do dodatku do wynagrodzenia. Dodatek przysługuje za każdą godzinę pracy w czasie przypadającym na porę nocną, w wysokości 20 proc. stawki godzinowej, wynikającej z minimalnego wynagrodzenia za pracę. Aby <a href="pracujesz" class="text-blue-500 hover:text-blue-700">Więcej...</a>
                </div>
            </div>

            <!-- Trzeci blok -->
            <div class="w-[30%] bg-white p-5 shadow-lg">
                <div class="mb-5">
                    <img src="{{ asset('images/praco1.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                </div>
                <a href="optymizm" class="text-red-500 text-left mt-5 font-bold">BEZ KATEGORII</a>
                <div class="text-center mt-5 mb-5 font-bold">
                    <h6><a href="optymizm">Optymizm polskich pracowników…</a></h6> 
                </div>
                <div class="text-center"> 
                    Zdaniem Polaków nie tylko łatwo o podjęcie pracy, lecz także coraz łatwiej o czerpanie z niej satysfakcji. W bieżącym badaniu po raz pierwszy znaleźliśmy się na podium pośród krajów, w których pracownicy mają najwyższy poziom satysfakcji. Aby <a href="optymizm" class="text-blue-500 hover:text-blue-700">Więcej...</a>
                </div>
            </div>
        </div>
    </div>
</div>

    
</div>




















    
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