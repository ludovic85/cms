@extends('admin.admin_layouts')

@section('admin_content')
    
    @php
    $total_post = DB::table('blogs')->count();
    $total_projects = DB::table('projects')->count();
    $total_services = DB::table('services')->count();
    $total_team_members = DB::table('team_members')->count();
    $total_photos = DB::table('photos')->count();
    $total_videos = DB::table('videos')->count();
    $total_completed_orders = DB::table('orders')->where('payment_status','Completed')->count();
    $total_pending_orders = DB::table('orders')->where('payment_status','Pending')->count();
    @endphp
<!-- Test barre de recherche 
    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('banque.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search banque">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Rechercher ma banque..." id="term">
                        <a href="{{ route('banque.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>  -->

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-2">
            <h1 class="h3 mb-3 text-gray-800">TABLEAU DE BORD</h1>
        </div>
    </div>

    <!-- Box Start -->
    <div class="row dashboard-page">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Total Articles & Publications</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_post }}</div>
                        </div>
                        <div class="col-auto">
                            <i class=" fas fa-clipboard fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Etablissements de crédit à jour</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_projects }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-square fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Etablissements de crédit non à jour</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_services }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Indemnisation(s) encours</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_team_members }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Indemnisation(s) Bloquée(s)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_photos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-lock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Indemnisation(s) en Attente(s)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_videos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-pause fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Indemnisation(s) Clôturée(s)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_completed_orders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <!-- <div class="card border-left-success shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="h4 font-weight-bold text-success mb-1">Pending Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_pending_orders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
    <!-- // Box End -->
@endsection
