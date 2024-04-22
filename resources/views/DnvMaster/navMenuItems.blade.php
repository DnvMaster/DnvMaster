@foreach($items as $item)
    <li class="nav-item">
        <a class="nav-link {{ (URL::current() == $item->url()) ? "class=active" : '' }}" href="{{ $item->url() }}">{{ $item->title  }}</a>
        @if($item->hasChildren())
            <ul class="dropdown-menu">
                @include('DnvMaster.navMenuItems',['items'=>$item->children()])
            </ul>
        @endif
    </li>
@endforeach
