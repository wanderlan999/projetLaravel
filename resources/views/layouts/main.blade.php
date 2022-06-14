<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


        <link href="/css/styles.css" rel="stylesheet">
        <script src="/js/scripts.js"></script>


    </head>

        <title>@yield('title')</title>


        <!--Fonte do google-->
 
        

        <!--css do bootstap-->
       

        <!--css da aplicaçao-->
       
                        
     

    </head>
    <body >
     
      <header>

      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
              <img src="/img/logo.jpeg" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
           
           
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                     @auth
                     <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Meus Eventos</a>
                </li>
                <li class="nav-item">
                   <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout"
                     class="nav-link"
                      onclick="event.preventDefault();
                      this.closest('form').submit();">
                      Sair
                    </a>
                   </form>
                </li>
                     @endauth
                   @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>

                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                 @endguest
            </ul>

 
          </div>


      </nav>

      </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

       <footer>
           <p>HDC Events &copy: 2022</p>
       </footer>

       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
