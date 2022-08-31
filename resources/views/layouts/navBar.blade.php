<div class="p-2   bg-black d-flex align-items-center justify-content-between">
   <div class="logo">
       <a class="navbar-brand" href="#">
           <img src="{{ asset('images/logo.png') }}" alt="" width="120" height="auto">
       </a>
   </div>

    <div class="menu-list hidden-sm-and-down">
        <a class="text-white px-2 dropdown-toggle" href="/">About</a>
        <a class="text-white px-2 dropdown-toggle" href="#">Leagues</a>
        <a class="text-white px-2" href="#">Courts</a>
    </div>

    <div class="nav-cta d-flex">
        <button class="btn theme-btn rounded-pill dropdown-toggle" type="submit">Account</button>
        <button class="btn rounded-circle hidden-sm-and-up"
                id="mobile-menu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                type="button"
        >
            <img src="{{ asset('images/bars.svg') }}" alt="" width="30" height="auto">
        </button>


        <ul class="dropdown-menu" aria-labelledby="mobile-menu">
            <li><a class="dropdown-item" href="#">&#x3c; About </a></li>
            <li><a class="dropdown-item" href="#">&#x3c; Leagues</a></li>
            <li><a class="dropdown-item" href="#">Courts</a></li>
        </ul>
    </div>
</div>
