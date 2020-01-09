<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('public/assets/img/logo.png')}}" class="header-logo"> <span class="logo-name">ESL</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link"><i class="fa fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-hospital"></i><span>Hospitals</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('/sa/dashboard/hospitals/AddHospital')}}">Add Hospital</a></li>
                    <li><a class="nav-link" href="{{url('/sa/dashboard/hospitals/HospitalsList')}}">Hospital List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-ambulance"></i><span>Ambulance</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('/sa/dashboard/ambulance/AddAmbulance')}}">Add Ambulance</a></li>
                    <li><a class="nav-link" href="{{url('/sa/dashboard/ambulance/AmbulanceList')}}">Ambulance List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-hospital"></i><span>Blood Banks</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('/sa/dashboard/bloodbank/AddBloodBank')}}">Add Blood Bank</a></li>
                    <li><a class="nav-link" href="{{url('/sa/dashboard/bloodbank/BloodBankList')}}">Blood Bank List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-home"></i><span>Charity</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('/sa/dashboard/charity/AddCharity')}}">Add Charity</a></li>
                    <li><a class="nav-link" href="{{url('/sa/dashboard/charity/CharityLists')}}">Charity List</a></li>
                </ul>
            </li>
            <!--<li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-newspaper"></i><span>Post's</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Categories</a></li>
                    <li><a class="nav-link" href="#">Tags</a></li>
                    <li><a class="nav-link" href="#">Add Post</a></li>
                    <li><a class="nav-link" href="#">Post List</a></li>
                </ul>
            </li>-->
            <li class="menu-header">Master Data</li>
            <li class="dropdown">
                <a href="{{url('/sa/roles')}}" class="nav-link"><i class="fa fa-list"></i><span>Roles</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/countries')}}" class="nav-link"><i class="fa fa-map"></i><span>Country</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/states')}}" class="nav-link"><i class="fa fa-location-arrow"></i><span>States</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/districts')}}" class="nav-link"><i class="fa fa-map-signs"></i><span>Districts</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/cities')}}" class="nav-link"><i class="fa fa-map-marker"></i><span>Cities</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/locations')}}" class="nav-link"><i class="fa fa-map-pin"></i><span>Locations</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/accidentypes')}}" class="nav-link"><i class="fa fa-list"></i><span>Accident Types</span></a>
            </li>
            <li class="dropdown">
                <a href="{{asset('/sa/hospitaltypes')}}" class="nav-link"><i class="fa fa-list"></i><span>Hospital Types</span></a>
            </li>
            <li class="dropdown">
                <a href="{{asset('/sa/hospital/specializations')}}" class="nav-link"><i class="fa fa-list"></i><span>Hospital specializations</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/bloodbanks/groups')}}" class="nav-link"><i class="fa fa-tint"></i><span>Blood Groups</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/charity/types')}}" class="nav-link"><i class="fa fa-home"></i><span>Charity Types</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/charity/donationtypes')}}" class="nav-link"><i class="fa fa-life-ring"></i><span>Donation Types</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/sa/ambulance/types')}}" class="nav-link"><i class="fa fa-ambulance"></i><span>Ambulance Types</span></a>
            </li>
            <li class="menu-header">Settings</li>
        </ul>
    </aside>
</div>
