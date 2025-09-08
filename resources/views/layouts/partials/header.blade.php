<!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Vibes Lombok
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('rent-car') }}">Rent Car</a></li>
                                    <li><a href="{{ route('tour-package') }}">Tour Package</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#courses">About Us</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                            <li class="scroll-to-section"><a href="#contact">Blog</a></li>

                            <!-- User Icon -->
                            <li class="user-icon"> 
                                <a href="javascript:void(0)" id="userMenuToggle">
                                    @if(Auth::check() && Auth::user()->profile_picture)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User" class="user-avatar">
                                    @else
                                        <img src="assets/images/user.jpg" alt="User" class="user-avatar">
                                    @endif
                                </a>
                                
                                <!-- Dropdown User Menu -->
                                <div class="user-dropdown" id="userDropdown">
                                    <div class="user-info">
                                        @if(Auth::check() && Auth::user()->profile_picture)
                                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User" class="user-avatar-lg">
                                        @else
                                            <img src="assets/images/user.jpg" alt="User" class="user-avatar-lg">
                                        @endif
                                        <div>
                                            <h5>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</h5>
                                            <p>{{ Auth::check() ? Auth::user()->email : 'Not logged in' }}</p>
                                        </div>
                                    </div>
                                
                                    <!-- Tambahan tombol edit profil -->
                                    <div class="edit-profile-btn" style="margin-bottom: 0px;">
                                        <a href="{{ route('profile') }}">
                                            <i class="fa fa-edit"></i> Edit Profile
                                        </a>
                                    </div>

                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-cog"></i> History</a></li>
                                        <li><a href="#"><i class="fa fa-shield-alt"></i> Security</a></li>
                                        <li><a href="{{ route('guest') }}"><i class="fa fa-sign-out-alt"></i> Logout    </a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>