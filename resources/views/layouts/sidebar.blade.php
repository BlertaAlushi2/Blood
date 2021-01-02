<div class="sidebar" data-color="green" data-background-color="white" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{route('home')}}" class="simple-text logo-mini">
            BBMS
        </a>
        </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            @if(Auth::user()->role === 1)
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#courses">
                    <i class="material-icons">image</i>
                    <p> Users
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="courses">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('users') }}">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Users </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link cc" href="{{ route('addUser') }}">
                                <span class="sidebar-mini"> NU</span>
                                <span class="sidebar-normal"> New User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#assignments">
                    <i class="material-icons">apps</i>
                    <p> Donations
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="assignments">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('donations') }}">
                                <span class="sidebar-mini"> D </span>
                                <span class="sidebar-normal"> Donations</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('addDonation')}}">
                                <span class="sidebar-mini"> ND </span>
                                <span class="sidebar-normal"> New Donation </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#camps">
                    <i class="material-icons">image</i>
                    <p> Camps
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="camps">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('camps') }}">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal"> Camps </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link cc" href="{{ route('addCamp') }}">
                                <span class="sidebar-mini"> NC</span>
                                <span class="sidebar-normal"> New Camp</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#requests">
                        <i class="material-icons">image</i>
                        <p> Requests
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="requests">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('requests') }}">
                                    <span class="sidebar-mini"> C </span>
                                    <span class="sidebar-normal"> Requests </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link cc" href="{{ route('addRequest') }}">
                                    <span class="sidebar-mini"> NR</span>
                                    <span class="sidebar-normal"> New Request</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('bloodGroup')}}">
                        <i class="material-icons">list</i>
                        <p> Blood Groups </p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('requests')}}">
                        <i class="material-icons">list</i>
                        <p> Blood Requests </p>
                    </a>
                </li>
                @endif
        </ul>
    </div>
</div>
