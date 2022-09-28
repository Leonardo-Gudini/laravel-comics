<h1>questo è header</h1>

<header>
        <div class="logo">
            <img src="{{asset('images/dc-logo.png')}}" alt="logo">
        </div>

        <nav>
            <ul>
                @foreach ($listaNav as $elementoNav)
                    <li><a href="#">{{$elementoNav}}</a></li>
                @endforeach

                
            </ul>
        </nav>
</header>