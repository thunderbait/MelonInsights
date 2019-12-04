    <div class="nav_logo flex justify_center">
        <img class="logo" src="{{ asset('images/logo.svg') }}">
    </div>

    <div class="nav_links">
        <div class="nav_option flex justify_center align_center flex_direction">
            <a href="{{ route('leads.venue.options') }}" class="nav_option_button">
                <div class="flex justify_center align_center flex_direction">
                    <img class="nav_option_logo" src="{{ asset('images/leadhands.svg') }}">
                    <div class="nav_option_text">New Leads</div>
                </div> 
            </a>

            <a href="{{ route('user.profile') }}" class="nav_option_button">
                <div class="flex justify_center align_center flex_direction">
                    <img class="nav_option_logo" src="{{ asset('images/user.svg') }}">
                    <div class="nav_option_text">Profile</div>
                </div> 
            </a>
        </div> 
    </div>

    <div class="nav_extras">
        <div class="logout">
            <a class="nav_link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
       
        <div class="polices flex flex_direction">
            <a href="" class="nav_link">Support</a>
            <a href="" class="nav_link">Legal & Privacy</a>
            <br>
            <div class="side_extra_info">@2019 PTY LTD </div>
        </div>
    </div>
