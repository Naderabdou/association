<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('storage/' . getSetting('logo')) }}" width="150px" alt="">
                </a>

            </li>

        </ul>
    </div>
    <div class="divider my-2"></div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main mb-4" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ isActiveRoute('admin.home') }}"><a class="d-flex align-items-center"
                    href="{{ route('admin.home') }}"><i class="fas fa-home"></i> <span
                        class="menu-title text-truncate">{{ transWord('الرئيسية') }}</span></a>
            </li>





            {{-- <li class="nav-item {{ areActiveRoutes(['admin.features.index', 'admin.features.edit']) }}">
                    <a class="d-flex align-items-center" href="{{ route('admin.features.index') }}">
                        <i class="fa-solid fa-rocket"></i>
                        <span class="menu-title text-truncate">{{ transWord('مميزات الموقع') }}</span>
                    </a>
                </li> --}}





            {{-- <li class="nav-item {{ areActiveRoutes(['admin.teams.index', 'admin.teams.edit']) }}">
                    <a class="d-flex align-items-center" href="{{ route('admin.teams.index') }}">
                        <i class="fa-solid fa-users"></i>
                        <span class="menu-title text-truncate">{{ transWord('فريق العمل') }}</span>
                    </a>
                </li> --}}


            {{-- <li class="nav-item {{ areActiveRoutes(['admin.sliders.index', 'admin.sliders.edit']) }}">
                    <a class="d-flex align-items-center" href="{{ route('admin.sliders.index') }}">
                        <i class="fa-solid fa-images"></i>
                        <span class="menu-title text-truncate">{{ transWord('الاسليدر') }}</span>
                    </a>
                </li> --}}



            <li class="nav-item {{ areActiveRoutes(['admin.questions.index', 'admin.questions.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.questions.index') }}">
                    <i class="fas fa-question-circle"></i>
                    <span class="menu-title text-truncate">{{ transWord('الاسئله المتكرره') }}</span>
                </a>
            </li>
            <li class="nav-item {{ areActiveRoutes(['admin.ourValues.index', 'admin.ourValues.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.ourValues.index') }}">
                    <i class="fas fa-gem"></i>
                    <span class="menu-title text-truncate">{{ transWord('قيمنا') }}</span>
                </a>
            </li>
            <li class="nav-item {{ areActiveRoutes(['admin.directors.index', 'admin.directors.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.directors.index') }}">
                    <i class="fas fa-users"></i>
                    <span class="menu-title text-truncate">{{ transWord('اعضاء مجلس الادارة') }}</span>
                </a>
            </li>

            <li
                class="nav-item {{ areActiveRoutes(['admin.CommitteesCategory.index', 'admin.CommitteesCategory.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.CommitteesCategory.index') }}">
                    <i class="fas fa-building"></i>
                    <span class="menu-title text-truncate">{{ transWord('اقسام اللجان') }}</span>
                </a>
            </li>

            <li
                class="nav-item {{ areActiveRoutes(['admin.committeeMembers.index', 'admin.committeeMembers.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.committeeMembers.index') }}">
                    <i class="fas fa-user-cog"></i>
                    <span class="menu-title text-truncate">{{ transWord('اعضاء اللجان') }}</span>
                </a>
            </li>


            <li class="nav-item {{ areActiveRoutes(['admin.ourPrograms.index', 'admin.ourPrograms.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.ourPrograms.index') }}">
                    <i class="fas fa-project-diagram"></i>
                    <span class="menu-title text-truncate">{{ transWord('برامجنا') }}</span>
                </a>
            </li>

            <li class="nav-item {{ areActiveRoutes(['admin.ourPaths.index', 'admin.ourPaths.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.ourPaths.index') }}">
                    <i class="fas fa-road"></i>
                    <span class="menu-title text-truncate">{{ transWord('مساراتنا') }}</span>
                </a>
            </li>

            <li
                class="nav-item {{ areActiveRoutes(['admin.regulationCategories.index', 'admin.regulationCategories.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.regulationCategories.index') }}">
                    <i class="fas fa-list"></i>
                    <span class="menu-title text-truncate">{{ transWord('اقسام اللوائح والسياسات') }}</span>
                </a>
            </li>

            <li class="nav-item {{ areActiveRoutes(['admin.regulations.index', 'admin.regulations.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.regulations.index') }}">
                    <i class="fas fa-balance-scale"></i>
                    <span class="menu-title text-truncate">{{ transWord(' اللوائح والسياسات') }}</span>
                </a>
            </li>

            <li class="nav-item {{ areActiveRoutes(['admin.blogs.index', 'admin.blogs.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.blogs.index') }}">
                    <i class="fas fa-blog"></i>
                    <span class="menu-title text-truncate">{{ transWord(' المدونه') }}</span>
                </a>
            </li>

            <li class="nav-item {{ areActiveRoutes(['admin.partners.index', 'admin.partners.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.partners.index') }}">
                    <i class="fas fa-handshake"></i>
                    <span class="menu-title text-truncate">{{ transWord(' الشركاء') }}</span>
                </a>
            </li>




            <li class="nav-item {{ areActiveRoutes(['admin.subscribe.index', 'admin.subscribe.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.subscribe.index') }}">
                    <i class="fas fa-rss"></i>
                    <span class="menu-title text-truncate">{{ transWord(' الاشتركات') }}</span>
                </a>
            </li>




            <li class="nav-item {{ areActiveRoutes(['admin.memberships.index', 'admin.memberships.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.memberships.index') }}">
                    <i class="fas fa-users"></i>
                    <span
                        class="menu-title text-truncate">{{ transWord('طلبات العضوية') }}</span></a>
            </li>

            <li class="nav-item {{ areActiveRoutes(['admin.enrollment.index']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.enrollment.index','empowerment_program') }}">
                    <i class="fas fa-users"></i>
                    <span
                        class="menu-title text-truncate">{{ transWord(' طلبات  ببرنامج التمكين') }}</span></a>
            </li>
            <li class="nav-item {{ areActiveRoutes(['admin.enrollment_innovation.index']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.enrollment_innovation.index','Social_innovation_program') }}">
                    <i class="fas fa-users"></i>
                    <span
                        class="menu-title text-truncate">{{ transWord(' طلبات  ببرنامج الابتكار ') }}</span></a>
            </li>






            <li class="nav-item {{ areActiveRoutes(['admin.contacts.index', 'admin.contacts.edit']) }}">
                <a class="d-flex align-items-center" href="{{ route('admin.contacts.index') }}"><i
                        class="fa-solid fa-inbox"></i><span
                        class="menu-title text-truncate">{{ transWord('رسائل التواصل') }}</span></a>
            </li>









            {{-- @can('tools')
                <li class="nav-item {{ areActiveRoutes(['admin.tools.index', 'admin.tools.edit']) }}">
                    <a class="d-flex align-items-center" href="{{ route('admin.tools.index') }}"><i
                            class="fas fa-network-wired"></i><span
                            class="menu-title text-truncate">{{ transWord('أدوات الربط') }}</span></a>
                </li>
            @endcan --}}

            <li class="nav-item {{ isActiveRoute('admin.settings.create') }}"><a class="d-flex align-items-center"
                    href="{{ route('admin.settings.create') }}"><i class="fa-solid fa-gear"></i><span
                        class="menu-title text-truncate">{{ transWord('الإعدادات') }}</span></a>
            </li>
        </ul>

    </div>
</div>
<!-- END: Main Menu-->
