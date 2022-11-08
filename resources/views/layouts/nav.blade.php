@php
$menus = DB::table('menus')->get();
$menu_arr = array();
@endphp

@foreach($menus as $row)
    @php
        $menu_arr[$row->menu_name] = $row->menu_status;
    @endphp
@endforeach

<!-- Start Navbar Area -->
<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="" class="logo">
            <img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        @if($menu_arr['Home'] == 'Show')
                        <li class="nav-item">
                           <!-- <a href="{{ url('/') }}" class="nav-link">Home</a>-->
                            <a href="{{ url('/') }}" class="nav-link">Accueil</a>
                        </li>
                        @endif

                        @if($menu_arr['About'] == 'Show')
                        <li class="nav-item">
                           <!-- <a href="{{ route('front.about') }}" class="nav-link ">About</a>-->
                            <a href="{{ route('front.presentation') }}" class="nav-link dropdown-toggle">Fogadac</a>
                            <ul class="dropdown-menu">
                            @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                     <a href="{{ route('front.mecanisme') }}" class="nav-link">Qu'est ce qu'un mécanisme d'assurance des dépôts?</a>
                                </li>
                                @endif
                                @if($menu_arr['FAQ'] == 'Show')
                                 <li class="nav-item">
                                    <a href="{{ route('front.presentation') }}" class="nav-link">Présentation</a>
                                </li>
                                @endif
                                @if($menu_arr['FAQ'] == 'Show')
                                 <li class="nav-item">
                                    <a href="{{ route('front.organisation') }}" class="nav-link">Organisation</a>
                                </li>
                                @endif
                                @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                     <a href="{{ route('front.missions') }}" class="nav-link">Missions</a>
                                    <ul class="dropdown-menu">
                                    @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                    <!-- <a href="{{ route('front.preventive') }}" class="nav-link">Intervention préventive</a> -->
                                </li>
                                @endif
                                @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                    <!-- <a href="{{ route('front.curative') }}" class="nav-link">Intervention curative</a> -->
                                </li>
                                @endif
                                    </ul>
                                </li>
                                @endif
                            @if($menu_arr['FAQ'] == 'Show')
                                <!-- <li class="nav-item">
                                    <a href="{{ route('front.faq') }}" class="nav-link">Faq</a>
                                </li> -->
                                @endif
                             @if($menu_arr['Contact'] == 'Show')
                                <li class="nav-item">
                                     <!-- <a href="{{ route('front.contact') }}" class="nav-link ">Contact</a> -->
                             </li>
                             @endif

                            </ul>
                        </li>
                        @endif

                        @if($menu_arr['Services'] == 'Show')
                        <li class="nav-item">
                           <!--<a href="{{ route('front.services') }}" class="nav-link ">Services</a>-->
                            <a href="#" class="nav-link dropdown-toggle ">Indemnisations</a>
                            <ul class="dropdown-menu">
                            @if($menu_arr['Services'] == 'Show')
                            <li class="nav-item">
                           <a href="{{ route('front.processus') }}" class="nav-link ">Processus</a>
                           </li>
                             @endif
                                @if($menu_arr['Services'] == 'Show')
                                    <li class="nav-item">
                                        <a href="{{route('front.basedocumentaire')}}" class="nav-link ">Base documentaire</a>
                                    </li>
                                @endif

{{--                             @if($menu_arr['Services'] == 'Show')--}}
{{--                            <li class="nav-item">--}}
{{--                           <a href="{{ route('front.base_doc') }}" class="nav-link">Base documentaire</a>--}}
{{--                           <ul class="dropdown-menu">--}}
{{--                            @if($menu_arr['Services'] == 'Show')--}}
{{--                            <li class="nav-item">--}}
{{--                           <!-- <a href="{{ route('front.services') }}" class="nav-link">Documents</a> -->--}}
{{--                           </li>--}}
{{--                             @endif--}}
{{--                             @if($menu_arr['Services'] == 'Show')--}}
{{--                            <li class="nav-item">--}}
{{--                           <!-- <a href="{{ route('front.projects') }}" class="nav-link">Indemnisations</a> -->--}}
{{--                           </li>--}}
{{--                             @endif--}}
{{--                           </ul>--}}
{{--                           </li>--}}
{{--                             @endif--}}

                             @if($menu_arr['Services'] == 'Show')
                            <li class="nav-item">
{{--                           <a href="#" class="nav-link ">Traitement indemnisation</a>--}}
                           </li>
                             @endif
                            </ul>
                        </li>
                        @endif

                        @if($menu_arr['Team Members'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.banque') }}" class="nav-link">Banques</a>
                                    <ul class="dropdown-menu">
                                    @if($menu_arr['Contact'] == 'Show')
                                <li class="nav-item">
                                     <!-- <a href="#" class="nav-link ">se connecter</a> -->
                             </li>
                             @endif
                                    </ul>
                                </li>
                                @endif

                        @if($menu_arr['Shop'] == 'Show')
                        <li class="nav-item">
                        <!--<a href="{{ route('front.shop') }}" class="nav-link ">Shop</a> -->
                        </li>
                        @endif

                        @if($menu_arr['Blog'] == 'Show')
                        <li class="nav-item">
                           <!-- <a href="{{ route('front.blogs') }}" class="nav-link ">Blog</a> -->
                            <a href="#" class="nav-link dropdown-toggle ">Informations</a>
                            <ul class="dropdown-menu">
                            @if($menu_arr['Blog'] == 'Show')
                                <li class="nav-item">
                                     <a href="{{ route('front.blogs') }}" class="nav-link ">Actualités</a>
                             </li>
                             @endif
                             @if($menu_arr['Blog'] == 'Show')
                                <li class="nav-item">
                                     <a href="{{ route('front.base_doc') }}" class="nav-link ">Textes règlementaires</a>
                             </li>
                             @endif
{{--                             @if($menu_arr['Blog'] == 'Show')--}}
{{--                                <li class="nav-item">--}}
{{--                                     <a href="{{ route('front.blogs') }}" class="nav-link ">Publications</a>--}}
{{--                             </li>--}}
{{--                             @endif--}}
                             @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.faq') }}" class="nav-link">Faq</a>
                                </li>
                             @endif

                            </ul>
                        </li>
                        @endif

                        @if($menu_arr['Contact'] == 'Show')
                                <li class="nav-item">
                                     <a href="{{ route('front.contact') }}" class="nav-link">Contact</a>
                                     <ul class="dropdown-menu">
                                     @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                    <!-- <a href="{{ route('front.faq') }}" class="nav-link">Faq</a> -->
                                </li>
                                     @endif
                                     </ul>
                             </li>
                             @endif

                        <!-- menu deroulant des langues -->
                        @if($menu_arr['Shop'] == 'Show')
                        <li class="nav-item" style="display: none">
                        <span style="background-color:#00183A; border-color:#00183A;" class="btn btn-primary" href="#Français" data-parent="#accordion" data-toggle="collapse">Fr</span>
                        <span class="btn btn-danger" href="#Anglais" data-parent="#accordion" data-toggle="collapse">En</span>
                         </li>

                        @endif


                        @php
                            $dynamic_pages = DB::table('dynamic_pages')->get();
                        @endphp


                        @if(
                        ($menu_arr['Career'] == 'Hide') &&
                        ($menu_arr['Project'] == 'Hide') &&
                        ($menu_arr['Photo Gallery'] == 'Hide') &&
                        ($menu_arr['Video Gallery'] == 'Hide') &&
                        ($menu_arr['FAQ'] == 'Hide') &&
                        ($menu_arr['Team Members'] == 'Hide') &&
                        (!$dynamic_pages)
                        )

                        @else
                        <li class="nav-item">
                          <!--  <a href="javascript:void(0);" class="nav-link dropdown-toggle">Pages</a>-->
                            <ul class="dropdown-menu">

                                @if($menu_arr['Career'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.career') }}" class="nav-link">Career</a>
                                </li>
                                @endif

                                @if($menu_arr['Project'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.projects') }}" class="nav-link">Projects</a>
                                </li>
                                @endif

                                @if($menu_arr['Photo Gallery'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.photo_gallery') }}" class="nav-link">Photo Gallery</a>
                                </li>
                                @endif

                                @if($menu_arr['Video Gallery'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.video_gallery') }}" class="nav-link">Video Gallery</a>
                                </li>
                                @endif

                                @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.faq') }}" class="nav-link">FAQ</a>
                                </li>
                                @endif

                                @if($menu_arr['Team Members'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.team_members') }}" class="nav-link">Team Members</a>
                                </li>
                                @endif


                                @foreach($dynamic_pages as $row)
                                    <li class="nav-item">
                                        <a href="{{ url('page/'.$row->dynamic_page_slug) }}" class="nav-link">{{ $row->dynamic_page_name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        @endif


                        @if($menu_arr['Contact'] == 'Show')
                        <li class="nav-item">
                            <!--<a href="{{ route('front.contact') }}" class="nav-link ">Contact</a>-->
                        </li>
                        @endif
                         <div class="navbar-brand" style="padding-top: 25px!important">
                        <select name="change_language" id="change_language" class="change-language">

                                        <option value="fr" data-class="fr" selected >Français</option>
                                        <option value="en" data-class="en" >English</option>
                        </select>
	                </div>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
