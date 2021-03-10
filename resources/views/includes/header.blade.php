<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
            @php $locale = session()->get('locale'); @endphp
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @switch($locale)
                        @case('ru')
                        {{__('site.russian')}}
                        @break
                        @default
                        {{__('site.english')}}
                    @endswitch
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/lang/en">{{__('site.english')}}</a>
                    <a class="dropdown-item" href="/lang/ru"> {{__('site.russian')}}</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
