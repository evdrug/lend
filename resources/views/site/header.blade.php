<div class="container">
    <div class="header_box">
        <div class="logo"><a href="#"><img src="assets/img/logo.png" alt="logo"></a></div>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            @if(isset($menu))

            <div id="main-nav" class="collapse navbar-collapse navStyle">
                <ul class="nav navbar-nav" id="mainNav">
                        @foreach ($menu as $item)
                        <li><a href="#{{ $item['alias'] }}" class="scroll-link">{{ $item['name'] }}</a></li>
                    @endforeach
                        {{--<li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>--}}
                </ul>
            </div>
            @endif
        </nav>
    </div>
</div>
