<ul id="main-nav" class="nav nav-pills">
    @foreach($items as $key => $menu_item)
        <li class="{{url()->current() === url($menu_item->url) ? 'current-menu-item' : '' }}">
            <a href="{{ $menu_item->link() }}" target="{{ $menu_item->target }}">{{ $menu_item->title }}</a>
        </li>
    @endforeach
</ul>
