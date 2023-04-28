@props(['active','link','route'])

<li class="menu-item " aria-haspopup="true">
    <a href="{{ $route }}" class="menu-link ">
        <i @class(['menu-bullet menu-bullet-dot', 'font-bold' => true])><span></span></i>
        <span class="menu-text">Daftar Pelanggan</span>
    </a>
</li>
