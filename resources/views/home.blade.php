<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/home.css', 'resources/js/app.js']) 
@endif


 <title>Document</title>
</head>
<body>



    <div class="w-full h-[calc(80vh)] bg-cover bg-center p-5 text-white" style="background-image: url('images/city.jpg'); background-color: #575a58; mb-[+20px]">
 
    
      
    </div>
    





    <div id="dolnaczescy" class="relative w-[95%] mx-auto h-auto bg-cover bg-center p-5 text-white mt-[-20px]" style="background-image: url('{{ asset('images/city2.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div>
        <div class="relative z-20">
        <div class="flex items-center space-x-[5%]">
            <div class="w-[15%] h-[100px] text-white">
                <img src="{{ asset('images/jj0.png') }}" alt="Example Image" class="max-w-[150px] max-h-[100px] object-cover mx-auto">
            </div>
    
            <div class="w-[70%] h-[100px] text-center text-lg ">
                <h2>OGŁOSZENIA DLA PRACOWNIKÓW ZE WSCHODU I EUROPEJSKICH PRACODAWCÓW</h2>
                <h2>SERWIS <a href="#" class="text-blue-500 no-underline hover:underline">WORKINTHEWEST.COM</a> DZIAŁA NA TERENIE EUROPY</h2>
            </div>
        </div>
 
    
        
    
        <section id="numer2">
            <div class="text-[#FF8800] text-lg text-center mb-[20px] clear-both">
                <a href="#" class="text-[#FF8800] no-underline text-center">
                    Zarejestruj się i zyskaj pełny dostęp do profili zawodowych Pracowników z Ukrainy
                </a>
                <br>
                <div class="text-white mb-20">
                    Pomagamy w publikacji Twoich ogłoszeń
                </div>
            </div>
            
              
           
        </section>
    
        <section id="numer3">

            




            <div class="flex space-x-4 mt-[20px]">
                <div class="flex-1 flex justify-center items-center">
                    <img src="{{ asset('images/jj1.png') }}" alt="Example Image" class="h-[auto]">
                </div>
                <div class="flex-1 flex justify-center items-center">
                    <img src="{{ asset('images/jj2.png') }}" alt="Example Image" class="h-[auto]">
                </div>
                <div class="flex-1 flex justify-center items-center">
                    <img src="{{ asset('images/jj3.png') }}" alt="Example Image" class="h-[auto]">
                </div>
            </div>
            




            <div class="flex space-x-4 mt-[20px]">
                <div class="flex-1 text-[#FF8800] text-center text-lg mb-[20px] mt-[20px]">
                    Dopracowujemy i tłumaczymy twoją ofertę pracy
                </div>
                <div class="flex-1 h-[100px] text-[#FF8800] text-center text-lg mb-[20px] mt-[20px]">
                    Dbamy o to aby aplikowali najlepsi kandydaci
                </div>
                <div class="flex-1 h-[100px] text-[#FF8800] text-center text-lg mb-[20px] mt-[20px]">
                    Publikujemy je we własnym serwisie workinthewest.com oraz na partnerskich portalach pracy działających w Europie
                </div>
            </div>
            </section>
    


        <section id="numer4">
         <div class="text-3xl text-center mt-[50px] mb-[20px] ">
    Współpracujemy z
</div>

           




<section id="carouselExample" class="carousel slide my-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex">
          <!-- Pierwszy obrazek -->
          <a href="https://example1.com" class="col-3">
            <img src="images/hrge.png" class="d-block w-100" alt="Obrazek 1">
          </a>
          <!-- Drugi obrazek -->
          <a href="https://example2.com" class="col-3">
            <img src="images/azer.png" class="d-block w-100" alt="Obrazek 2">
          </a>
          <!-- Trzeci obrazek -->
          <a href="https://example3.com" class="col-3">
            <img src="images/work.png" class="d-block w-100" alt="Obrazek 3">
          </a>
          <!-- Czwarty obrazek -->
          <a href="https://example4.com" class="col-3">
            <img src="images/gruz.png" class="d-block w-100" alt="Obrazek 4">
          </a>
        </div>
      </div>
  

      <div class="carousel-item">
        <div class="d-flex">
          <a href="https://example5.com" class="col-3">
            <img src="images/jobs.jpg" class="d-block w-100" alt="Obrazek 5">
          </a>
          <a href="https://example6.com" class="col-3">
            <img src="images/rudua.png" class="d-block w-100" alt="Obrazek 6">
          </a>
          <a href="https://example7.com" class="col-3">
            <img src="images/it-start.png" class="d-block w-100" alt="Obrazek 7">
          </a>
          <a href="https://example8.com" class="col-3">
            <img src="images/worknet.png" class="d-block w-100" alt="Obrazek 8">
          </a>
        </div>
      </div>


      <div class="carousel-item">
        <div class="d-flex">
          <a href="https://example5.com" class="col-3">
            <img src="images/hhgrc.jpg" class="d-block w-100" alt="Obrazek 9">
          </a>
          <a href="https://example6.com" class="col-3">
            <img src="images/EuRabota.png" class="d-block w-100" alt="Obrazek 10">
          </a>
          <a href="https://example7.com" class="col-3">
            <img src="images/robota.png" class="d-block w-100" alt="Obrazek 11">
          </a>
          <a href="https://example8.com" class="col-3">
            <img src="images/jobs-1.jpg" class="d-block w-100" alt="Obrazek 12">
          </a>
        </div>
      </div>


   
    </div>
  
    <!-- Kontrolki karuzeli -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Poprzedni</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Następny</span>
    </button>
  </section>
  
  <style>
    #carouselExample .carousel-item {
      transition: transform 0.5s ease; /* Płynne przesuwanie */
    }
  
    #carouselExample .col-3 {
      flex: 0 0 25%; /* Cztery obrazki na jednym slajdzie */
    }
  
    #carouselExample img {
      width: 100%;
      height: 50px;
    }
  </style>
  
                  











                
            
        </section> 
      
        <section id="numer5">
            <hr/>
            <div class="flex justify-center text-center text-[clamp(1rem,_2.5vw,_1.5rem)] w-[70%] mx-auto mb-[20px] px-[5%]">
                SOLIDNY I ODPOWIEDZIALNY PARTNER BIZNESOWY
            
            </div>    <hr class="mx-20" />
            
            <div class="text-center text-lg mt-12 mb-5 mx-[15%]">ZAPEWNIAMY KOMPLEKSOWĄ OBSŁUGĘ PRZEDSIĘBIORSTW NA TERENIE CAŁEJ EUROPY W ZAKRESIE UZUPEŁNIANIA BRAKÓW KADROWYCH.</div>
            <div class="text-center text-lg mb-5 mx-[15%]">ZESPÓŁ NASZYCH EKSPERTÓW SPECJALIZUJE SIĘ W REKRUTACJI I ZATRUDNIANIU OBCOKRAJOWCÓW, GŁÓWNIE Z EUROPY WSCHODNIEJ.</div>
        </section>
        <section id="numer6" class="flex flex-wrap gap-2 clear-both mx-auto w-full">
            <div class="w-full max-w-[80%] mx-auto flex flex-wrap justify-center gap-6">
                <div class="flex flex-col items-center justify-center border-2 border-orange-500 p-2 text-center text-orange-500 rounded-md w-[20%] max-w-[20%] h-[300px] m-3">
                    <img src="{{ asset('images/1pop.png') }}" alt="Example Image" class="max-w-[150px] max-h-[150px]"><br/>
                    Dajemy przepustkę pracownikom zza wschodniej granicy do pracy w Europie
                </div>
                <div class="flex flex-col items-center justify-center border-2 border-orange-500 p-2 text-center text-orange-500 rounded-md w-[20%] max-w-[20%] h-[300px] m-3">
                    <img src="{{ asset('images/2pop.png') }}" alt="Example Image" class="max-w-[150px] max-h-[150px]"><br/>
                    Rekrutujemy wykwalifikowanych pracowników dla różnych branż
                </div>
                <div class="flex flex-col items-center justify-center border-2 border-orange-500 p-2 text-center text-orange-500 rounded-md w-[20%] max-w-[20%] h-[300px] m-3">
                    <img src="{{ asset('images/3pop.png') }}" alt="Example Image" class="max-w-[150px] max-h-[150px]"><br/>
                    Oferujemy usługi zakładania firm i spółek dla obcokrajowców
                </div>
                <div class="flex flex-col items-center justify-center border-2 border-orange-500 p-2 text-center text-orange-500 rounded-md w-[20%] max-w-[20%] h-[300px] m-3">
                    <img src="{{ asset('images/4pop.png') }}" alt="Example Image" class="max-w-[150px] max-h-[150px]"><br/>
                    Rozwijamy sieć rekruterów i sprzedawców usługi HR w Polsce i zagranicą
                </div>
            </div>
        </section>
        
    
        <section id="numer7">
            <div class="text-center text-lg mb-5  mt-20">Obszary działania<hr class="mx-[10%]">
            </div>  
           

         <div class="flex justify-center mx-[20%] mt-[20px] mb-[20px] space-x-[8rem]">
    <img src="images/polska.png" alt="Image 1" class="w-[6rem] h-[6rem]">
    <img src="images/niemcy-2.png" alt="Image 2" class="w-[6rem] h-[6rem]">
    <img src="images/norwegia-2.png" alt="Image 3" class="w-[6rem] h-[6rem]">
    <img src="images/szwecja-1.png" alt="Image 1" class="w-[6rem] h-[6rem]">
    <img src="images/ukraina-1.png" alt="Image 2" class="w-[6rem] h-[6rem]">
    <img src="images/sadas.png" alt="Image 3" class="w-[6rem] h-[6rem]">
    <img src="images/dania-1.png" alt="Image 3" class="w-[6rem] h-[6rem]">
</div>

<div class="flex justify-center mx-[10%] mt-[20px] mb-[20px] space-x-[4rem] flex-wrap">
    <img src="images/india-2.png" alt="Image 4" class="w-[6rem] h-[6rem] object-contain">
    <img src="images/francja-2.png" alt="Image 5" class="w-[6rem] h-[6rem] object-contain">
    <img src="images/wietnam-2.png" alt="Image 4" class="w-[6rem] h-[6rem] object-contain">
    <img src="images/chiny.png" alt="Image 5" class="w-[6rem] h-[6rem] object-contain">
    <img src="images/pakistan-1.png" alt="Image 5" class="w-[6rem] h-[6rem] object-contain">
</div>

            


        </section>
    
        <section id="numer8">
            <div class="text-center text-lg mb-5 mt-20">Obszary specjalizacji<hr class="mx-[10%]"></div>  
           
         
            <div class="flex justify-center mx-[10%] mt-[20px] mb-[20px] space-x-[4rem]">
                <!-- Pierwszy obrazek -->
                <div class="flex flex-col items-center">
                    <img src="images/15-1.png" alt="Image 4" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">Prace sezonowe</div>
                </div>
            
                
                <div class="flex flex-col items-center">
                    <img src="images/14-1-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">Branża logistyczna</div>
                </div>
            
                <div class="flex flex-col items-center">
                    <img src="images/13-1.png" alt="Image 4" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">Branża turystyczno/hotelarska</div>
                </div>
            
               
                <div class="flex flex-col items-center">
                    <img src="images/12-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">Branża budowlana</div>
                </div>
            
              
                <div class="flex flex-col items-center">
                    <img src="images/11-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">Branża drzewna</div>
                </div>
            </div>
            


            <div class="flex justify-center mx-[10%] mt-[20px] mb-[20px] space-x-[4rem]">
                <!-- 2Pierwszy obrazek -->
                <div class="flex flex-col items-center">
                    <img src="images/10-1.png" alt="Image 4" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża stoczniowa   </div>
                </div>
            
                <div class="flex flex-col items-center">
                    <img src="images/9-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża lotnicza   </div>
                </div>
            
                
                <div class="flex flex-col items-center">
                    <img src="images/8-1-1.png" alt="Image 4" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">Branża samochodowa</div>
                </div>
            
           
                <div class="flex flex-col items-center">
                    <img src="images/7-1-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża spawalnicza </div>
                </div>
            
                <div class="flex flex-col items-center">
                    <img src="images/6-1-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża spożywcza</div>
                </div>
            </div>


            <div class="flex justify-center mx-[10%] mt-[20px] mb-[20px] space-x-[4rem]">
                <!-- 3Pierwszy obrazek -->
                <div class="flex flex-col items-center">
                    <img src="images/5-1-1.png" alt="Image 4" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">obróbka metalu    </div>
                </div>
            
           
                <div class="flex flex-col items-center">
                    <img src="images/3-4-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża meblarska</div>
                </div>
            
              
                <div class="flex flex-col items-center">
                    <img src="images/4-3-1.png" alt="Image 4" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża produkcyjna  </div>
                </div>
            
              
                <div class="flex flex-col items-center">
                    <img src="images/2-3-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża rolnicza  </div>
                </div>
            
              
                <div class="flex flex-col items-center">
                    <img src="images/1-3-1.png" alt="Image 5" class="w-[5rem] h-[5rem] object-contain">
                    <div class="text-orange-500 text-center mt-2">branża usługowa    </div>
                </div>
            </div>
            
            
            
        </section>
    
        <section id="numer9">
            <div id="k0" class="mx-[20%] font-bold text-xl text-center mb-5  mt-20"> 
                SZUKASZ PRACOWNIKA? Znajdziemy go dla ciebie!<br/>
                JAK PRZEBIEGA WSPÓŁPRACA?
                <hr class="mt-2">
            </div>
            <div id="kroki" class="flex mx-[20%]">
                <!-- Pierwsza kolumna -->
                <div class="w-1/2">
                    <div id="k1" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-1.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Zgłaszasz się do nas</span>
                    </div>
                    
                    <div id="k2" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-2.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Wspólnie z naszymi specjalistami ustalasz profil przyszłego pracownika</span>
                    </div>
            
                    <div id="k3" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-3.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Przedstawiamy plan działań i indywidualnie sprofilowaną ofertę.</span>
                    </div>
            
                    <div id="k4" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-4.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Zamieszczamy na naszym portalu workinthewest.com oraz na portalach partnerskich.</span>
                    </div>
                </div>
            
                <!-- Druga kolumna -->
                <div class="w-1/2">
                    <div id="k5" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-5.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Nasi headhunterzy zbierają aplikacje.</span>
                    </div>
            
                    <div id="k6" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-6.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Przeprowadzamy wieloetapową selekcję, z wykorzystaniem testów i symulacji.</span>
                    </div>
            
                    <div id="k7" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-7.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Rekomendujemy wybranych kandydatów.</span>
                    </div>
            
                    <div id="k8" class="flex flex-row items-center mb-5 px-5 mt-5 rounded-lg shadow-lg">
                        <img src="{{ asset('images/1-8.png') }}" alt="Example Image" class="max-w-[50px] max-h-[50px] mr-4">
                        <span class="text-white">Cały projekt rozliczamy na podstawie jednej faktury VAT</span>
                    </div>
                </div>
            </div>
            
            
            
            

    </section>
    <section id="numer10">
        <div id="zl" class="mx-[20%] font-bold text-3xl text-center mb-5 mt-5">
            Możesz nam zlecić
            <hr class="mt-2">
        </div>
        
        <div id="zl1" class="flex justify-between gap-2 mb-8">
            <div class="flex flex-col items-center sm:w-1/3 w-full">
                <img src="{{ asset('images/osoba.png') }}" alt="Opis obrazka" class="w-full h-auto max-w-[150px] mb-2">
                <span class="text-center">WYSZUKANIE CUDZOZIEMCA</span>
            </div>
            <div class="flex flex-col items-center sm:w-1/3 w-full">
                <img src="{{ asset('images/wgore.jpg') }}" alt="Opis obrazka" class="w-full h-auto max-w-[150px] mb-2">
                <span class="text-center">LEGALIZACJA POBYTU</span>
            </div>
            <div class="flex flex-col items-center sm:w-1/3 w-full">
                <img src="{{ asset('images/dokumenty.jpg') }}" alt="Opis obrazka" class="w-full h-auto max-w-[150px] mb-2">
                <span class="text-center">POMOC URZĘDOWA</span>
            </div>
        </div>
    </section>
    
</div>
    </div>



    
   
    
    <div id="blog" class="  mx-12 bg-white text-black"> <!-- Zwiększenie marginesów na mx-12 -->
    
        <!-- Bloki w float -->
        <div class="mt-5">
            <!-- Pierwszy blok -->
            <div class="mt-10 mb-10 mx-10">
                <div class="text-center w-full mb-5">
                    <h6 class="text-3xl font-bold">BLOG</h6> 
                </div>
            
                <!-- Bloki w flex -->
                <div class="flex space-x-4 justify-between">
                    <!-- Pierwszy blok -->
                    <div class="w-[30%] bg-white p-5 shadow-lg">
                       
                        <div class="mb-5">
                            <img src="{{ asset('images/praco2.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                        </div>
                        <a href="#" class="text-purple-500 text-left mt-5  font-bold">BEZ KATEGORII</a>
                        <div class="text-center mt-5 mb-5 font-bold">
                            <h6><a href="#">AGROTURYSTYKA JAKO FORMA BIZNESU</a></h6> <!-- Pogrubienie tytułu -->
                        </div>
                        <div class="text-center"> 
                            Działalność agroturystyczna prowadzona przez rolnika na terenie należącego do niego gospodarstwa rolniczego nie podlega rejestracji. Przysługuje w takim przypadku zwolnienie podatkowe lub preferencyjne formy opodatkowania. Agroturystyka zwolniona jest również ze spełnienia warunków dla organizacji us <a href="#" class="text-blue-500 hover:text-blue-700">Więcej...</a>
                        </div>
                    </div>
            
                    <!-- Drugi blok -->
                    <div class="w-[30%] bg-white p-5 shadow-lg">
                     
                        <div class="mb-5">
                            <img src="{{ asset('images/dodatek.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                        </div>
                        <a href="#" class="text-blue-500 text-left mt-5  font-bold">BEZ KATEGORII</a>
                        <div class="text-center mt-5 mb-5 font-bold">
                            <h6><a href="#">Pracujesz w porze nocnej? Sprawdź, w jakiej wysokości przysługuje Ci dodatek!</a></h6> <!-- Pogrubienie tytułu -->
                        </div>
                        <div class="text-center"> 
                            Pracujący w porze nocnej mają prawo do dodatku do wynagrodzenia. Dodatek przysługuje za każdą godzinę pracy w czasie przypadającym na porę nocną, w wysokości 20 proc. stawki godzinowej, wynikającej z minimalnego wynagrodzenia za pracę. Aby <a href="#" class="text-blue-500 hover:text-blue-700">Więcej...</a>
                        </div>
                    </div>
            
                    <!-- Trzeci blok -->
                    <div class="w-[30%] bg-white p-5 shadow-lg">
                      
                        <div class="mb-5">
                            <img src="{{ asset('images/praco1.jpg') }}" alt="Example Image" class="w-full h-auto mx-auto">
                        </div>
                        <a href="#" class="text-red-500 text-left mt-5  font-bold">BEZ KATEGORII</a>
                          <div class="text-center mt-5 mb-5 font-bold">
                            <h6><a href="#">Optymizm polskich pracowników…</a></h6> <!-- Pogrubienie tytułu -->
                        </div>
                        <div class="text-center"> 
                            Zdaniem Polaków nie tylko łatwo o podjęcie pracy, lecz także coraz łatwiej o czerpanie z niej satysfakcji. W bieżącym badaniu po raz pierwszy znaleźliśmy się na podium pośród krajów, w których pracownicy mają najwyższy poziom satysfakcji. Aby <a href="#" class="text-blue-500 hover:text-blue-700">Więcej...</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    

        
        


    <div class="w-auto h-52 bg-cover p-5 text-white mx-12 relative" style="background-image: url('images/city.jpg'); background-color: #575a58; background-position: center;">
        <!-- Przyciemnienie -->
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div> 
        
      
        <div class="relative z-20">
            <div id="badzwkonatk" class="absolute left-[15%] text-3xl font-bold">Bądźmy w kontakcie </div>            
        </div>
    </div>
    
    
    
    <div id="ostatnie" class=" w-auto mx-12 bg-gray-500 bg-cover bg-center p-5  h-auto gap-2  ">
        <div id="aktualnosci" class="float-left w-[10%] h-auto text-left    ">
            <a href="{{ url('/aktualnosci') }}" class="text-white">Aktualności</a>
        </div>
    
        <div id="kontakt" class="float-left w-[10%] h-auto text-left">
            <a href="/kontakt" class="text-white">Kontakt</a>
        </div>
        
        <div id="stronaglowna" class="float-left w-[10%] h-auto text-left">
            <a href="/stronaglowna" class="text-white">Strona Główna</a>
        </div>
        
        <div id="stworzone" class="float-left w-[40%] text-white text-right">
            | Stworzone przez dk
        </div>
    </div>
    
    
    
    
    


</body>
</html>