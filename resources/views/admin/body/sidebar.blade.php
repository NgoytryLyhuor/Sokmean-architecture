<div class="vertical-menu">
    <div data-simplebar class="h-100">
        @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
        @endphp
        <!-- User details -->
        {{-- <div class="user-profile text-center mt-3">
            <div class="">
                <img style="object-fit: cover;" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image): url('no_image.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $adminData->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div> --}}
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Settings</li>

                {{-- <li>
                    <a href="{{ route('homepages.index') }}" class="waves-effect">
                        <i class="ri-home-4-line"></i>
                        <span>Home Page</span>
                    </a>
                </li> --}}


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-home-4-line"></i>
                        <span>Home Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('homepages.section_one') }}">Section One</a></li>
                        <li><a href="{{ route('homepages.section_two') }}">Section Two</a></li>
                        <li><a href="{{ route('homepages.section_three') }}">Section Three</a></li>
                        <li><a href="{{ route('homepages.section_four') }}">Section Four</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('team-pages.index') }}" class="waves-effect">
                        <i class="ri-team-line"></i>
                        <span>Team Members</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('testimonial-pages.index') }}" class="waves-effect">
                        <i class="ri-team-line"></i>
                        <span>Testimonial</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-file-text-line"></i>
                        <span>Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('project-pages.index') }}">All Projects</a></li>
                        <li><a href="{{ route('project-pages.insert') }}">Insert New Project</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-file-text-line"></i>
                        <span>Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('service-pages.index') }}">All Services</a></li>
                        <li><a href="{{ route('service-pages.insert') }}">Insert New Service</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('about-pages.index') }}" class="waves-effect">
                        <i class="ri-team-line"></i>
                        <span>About Page</span>
                    </a>
                </li>



            </ul>

            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Other</li>

                <li>
                    <a href="{{ route('index') }}" class="waves-effect" target="_blank">
                        <i class="ri-earth-line"></i>
                        <span>Go to website</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
