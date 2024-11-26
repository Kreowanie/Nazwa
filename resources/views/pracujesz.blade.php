<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
@endif
    <title>Document</title>
</head>
<body>
    
    <div class="w-full min-h-[400px] bg-cover bg-center p-5 text-white relative" style="background-image: url('images/city.jpg'); background-color: #575a58; mb-[+20px]">
        <div id="a1" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
         <div class="text-3xl font-bold text-center">  Pracujesz w porze nocnej? Sprawdź, w jakiej wysokości przysługuje Ci dodatek! <br/>
            </div> <div class="text-center"> przez dk w dniu 23 listopada 2024 </div>
        </div>
    </div>
    




<div id="dół" class="w-[95%] mx-auto h-auto bg-white p-5 text-black mt-[-30px] relative z-10 rounded-t-lg flex">
    <div id="dolnaczescy" class="w-[85%] pr-5">
         
        
      
        



<div class="mt-5 mx-[25%] mt-10 mb-10"> 
    
    
 

        
        <!--    <div class="flex space-x-4 justify-between"> -->
            <!-- Pierwszy blok -->
       <p>    Pracujący w porze nocnej mają prawo do dodatku do wynagrodzenia. 
        Dodatek przysługuje za każdą godzinę pracy w czasie przypadającym na porę nocną, w wysokości 20 proc. stawki godzinowej, wynikającej z minimalnego wynagrodzenia za pracę.   </p> <br/> 
            <p> Aby obliczyć dodatek, należy obowiązujące minimalne wynagrodzenie za pracę podzielić przez liczbę godzin pracy przepracowanych w danym miesiącu, a następnie otrzymaną godzinową stawkę dodatku pomnożyć przez liczbę godzin przepracowanych przez pracownika w nocy w danym miesiącu.

        </p>
        <br/> 
        <h1 class="text-2xl font-bold mt-4 mb-2">Kto nie może pracować w nocy?</h1>

        <br/> 
               <p>Niektóre grupy pracowników objęte są bezwzględnym zakazem zatrudniania w porze nocnej. Pracodawcy nie mogą ustalać nocnych zmian dla kobiet w ciąży oraz pracownikom młodocianym. Rodzice opiekujący się dzieckiem do 4. roku życia mogą pracować w nocy tylko, jeśli wyrażą na to zgodę. Pracownicy niepełnosprawni potrzebują zaś zgody lekarza przeprowadzającego badania profilaktyczne lub lekarza sprawującego opiekę nad pracownikiem. Zgoda na uchylenie zakazu pracy wydawana jest na wniosek osoby niepełnosprawnej. Przepis nie dotyczy zatrudnionych przy pilnowaniu.
</p> <p>
    Pamiętaj! Pracodawca nie może obniżyć wysokości dodatku za pracę w nocy poniżej ustawowej wysokości. Nie może również całkowicie pozbawić pracowników prawa do niego.
</p><br/>
Źródło : https://zielonalinia.gov.pl/-/dodatek-za-prace-w-no-2</p> 
   
</div>









 <!--  </div>    tutaj jest sekcja komentarzy nizej -->
 <div class="sekcjazawierajacadol mt-5 mx-[25%] mb-10"> 
    
    
    <div class="sekcjainfo flex mb-6">
        <div class="w-3/10">
            <span>Kategoria</span>
            <div class="bg-pink-500 text-white font-bold py-1 px-2 rounded-lg hover:bg-pink-600 inline-block">
                Bez Kategorii
            </div>
        </div>
      
        <!-- Kontener z ikonami, zaczynający się od prawej strony -->
        <div class="sekcjainfo2 flex ml-auto space-x-8">
            <!-- Link do Facebooka -->
            <a href="https://www.facebook.com" target="_blank" class="flex items-center justify-center bg-gray-200 rounded-full w-12 h-12 hover:bg-gray-300">
                <i class="fab fa-facebook-f text-blue-600 text-xl"></i>
            </a>
    
            <!-- Link do Twittera -->
            <a href="https://www.twitter.com" target="_blank" class="flex items-center justify-center bg-gray-200 rounded-full w-12 h-12 hover:bg-gray-300">
                <i class="fab fa-twitter text-blue-400 text-xl"></i>
            </a>
    
            <!-- Link do Poczty -->
            <a href="mailto:someone@example.com" class="flex items-center justify-center bg-gray-200 rounded-full w-12 h-12 hover:bg-gray-300">
                <i class="fas fa-envelope text-red-600 text-xl"></i>
            </a>
        </div>
    </div>
    
    
    
    <hr class="my-4 border-t-2 border-gray-300">





    


  <div class="sekcjakomentarzy">
    @foreach ($comments as $comment)
        <div class="komentarz">
            <strong>{{ $comment->name }}</strong> ({{ $comment->email }})
            @if ($comment->website)
                <a href="{{ $comment->website }}" target="_blank">{{ $comment->website }}</a>
            @endif
            <p>{{ $comment->content }}</p>
            <small>{{ $comment->created_at->diffForHumans() }}</small>
        </div>
    @endforeach
</div>



<div class="licznikkomentarzy"> 
    <div class="licznikkomentarzy"> 
        {{ $comments->count() }} komentarzy
    </div>
    
</div>


<div class="dodajkomentarz">
              <form action="{{ route('pracujeszcomments.store', 'pracujesz') }}" method="POST" class="space-y-4">
    {{-- <form method="POST" action="{{ route('comments.store') }}" class="space-y-4"> --}}
        @csrf
        <div class="flex space-x-4 mb-4">
  
           
            <!-- Pole dla Imienia -->
            <div class="w-1/3">
            <label for="name" class="block font-medium">Nazwa:</label>
            <input type="text" id="name" name="name" required class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-pink-500 py-2 px-3 mt-1">
        </div>


        <div class="w-1/3">
            <label for="email" class="block font-semibold">Email:</label>
            <input type="email" id="email" name="email" required class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-pink-500 py-2 px-3 mt-1">
        </div>


       <div class="w-1/3">
            <label for="website" class="block font-semibold">Strona internetowa:</label>
            <input type="text" id="website" name="website" class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-pink-500 py-2 px-3 mt-1">
        </div>

    </div>

        <div>
            <label for="content" class="block font-semibold">Twój wpis:</label>
            <textarea id="content" name="content" required class="w-full border-b-2 border-gray-300 focus:outline-none focus:border-pink-500 py-2 px-3 mt-1" placeholder="Co masz na myśli?"></textarea>
        </div>
        
     <!-- Przycisk "Opublikuj komentarz" -->
     <button type="submit" class="bg-pink-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-pink-600 focus:outline-none">
        OPUBLIKUJ KOMENTARZ
     </button>
    </form>
    
</div>





 </div>




 </div>

 <div id="dolnaprawaczesc" class="w-[10%] ml-[5%] text-left">
    <h2 class="font-bold text-xl mb-4">Ostatnie wpisy</h2>
    <ul class="list-none space-y-4">
        <li>
            <a href="dodatek" class="text-blue-800 hover:text-blue-900 font-semibold">AGROTURYSTYKA JAKO FORMA BIZNESU</a>
        </li>
        <li>
            <a href="pracujesz" class="text-blue-800 hover:text-blue-900 font-semibold">Pracujesz w porze nocnej? Sprawdź, w jakiej wysokości przysługuje Ci dodatek!</a>
        </li>
        <li>
            <a href="optymizm" class="text-blue-800 hover:text-blue-900 font-semibold">Optymizm polskich pracowników…</a>
        </li>
    </ul>
    
    <h3 class="font-bold mt-8 mb-4">Promowane komentarze</h3>
    <ul class="list-none space-y-4">
        <li>
            <strong>Komendant</strong> - <a href="optymizm" class="text-blue-800 hover:text-blue-900 font-semibold">Optymizm polskich pracowników…</a>
        </li>
    </ul>
    
    <h3 class="font-bold mt-8 mb-4">Archiwa</h3>
    <ul class="list-none space-y-4">
        <li>
            <a href="aktualnosci" class="text-blue-800 hover:text-blue-900 font-semibold">Listopad 2024</a>
        </li>
      
    </ul>
    
    <h3 class="font-bold mt-8 mb-4">Kategorie</h3>
    <ul class="list-none space-y-4">
        <li>
            <a href="aktualnosci" class="text-blue-800 hover:text-blue-900 font-semibold">Bez kategorii</a>
        </li>
    </ul>
    
    <h3 class="font-bold mt-8 mb-4">Meta</h3>
    <ul class="list-none space-y-4">
        <li>
            <a href="https://jobs-jpm.pl/wp-login.php" class="text-blue-800 hover:text-blue-900 font-semibold">Zaloguj się</a>
        </li>
        <li>
            <a href="https://pl.wordpress.org/" class="text-blue-800 hover:text-blue-900 font-semibold">Kanał wpisów</a>
        </li>
        <li>
            <a href="https://pl.wordpress.org/" class="text-blue-800 hover:text-blue-900 font-semibold">Kanał komentarzy</a>
        </li>
        <li>
            <a href="https://pl.wordpress.org/" class="text-blue-800 hover:text-blue-900 font-semibold">WordPress.org</a>
        </li>
    </ul>
    
    </div>









   
</div>  



<!-----  tutaj bedzie sugerowane posty -->


<div class="powiazaneposty mt-[50px]">

<div class="text-center text-[32px] font-bold ">
    Powiązane posty
</div>


<div class="mt-5 mx-[auto] mt-10 mb-10 flex space-x-4  justify-center">
    
    <!-- Zawartość w tym divie -->


            <!-- Drugi blok -->
            <div class="w-[30%] bg-white p-5 shadow-lg">
                <div class="mb-5">
                    <img src="{{ asset('images/praco2.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                </div>
                <a href="dodatek" class="text-purple-500 text-left mt-5 font-bold">BEZ KATEGORII</a>
                <div class="text-center mt-5 mb-5 font-bold">
                    <h6><a href="dodatek">AGROTURYSTYKA JAKO FORMA BIZNESU</a></h6> 
                </div>
                <div class="text-center"> 
                    Działalność agroturystyczna prowadzona przez rolnika na terenie należącego do niego gospodarstwa rolniczego nie podlega rejestracji. Przysługuje w takim przypadku zwolnienie podatkowe lub preferencyjne formy opodatkowania. Agroturystyka zwolniona jest również ze spełnienia warunków dla organizacji us <a href="#" class="text-blue-500 hover:text-blue-700">Więcej...</a>
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