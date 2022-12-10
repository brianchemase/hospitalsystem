@extends('reception.inc.master')

@section('title','Dashboard')

@section('content')

<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Username!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Overview Section -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-one">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="db-info">
                            <h3>105</h3>
                            <h6>Patients</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-two">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-stethoscope"></i>
                            <i class="fa-light fa-stethoscope"></i>
                        </div>
                        <div class="db-info">
                            <h3>15</h3>
                            <h6>Lab Visits</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-three">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="db-info">
                            <h3>30</h3>
                            <h6>out Patients</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-four">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-bed"></i>
                            <i class="fa-solid fa-bed-pulse"></i>
                        </div>
                        <div class="db-info">
                            <h3>25</h3>
                            <h6>Inpatients</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Overview Section -->			
    
    <!-- Socail Media Follows -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill fb sm-box">
                <i class="fab fa-user"></i>
                <h6>105</h6>
                <p>Patients With Cover</p>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill twitter sm-box">
                <i class="fab fa-user"></i>
                <h6>48,596</h6>
                <p>Patients without Cover</p>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill insta sm-box">
                <i class="fab fa-user"></i>
                <h6>52,085</h6>
                <p>Covered Inpatients</p>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill linkedin sm-box">
                <i class="fab fa-users-in"></i>
                <h6>69,050</h6>
                <p>Uncoved Inpatients</p>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill fb sm-box">
                <i class="fab fa-user"></i>
                <h6>5</h6>
                <p>Patients Dischared</p>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill fb sm-box">
                <i class="fab fa-user"></i>
                <h6>105</h6>
                <p>Pending discharge</p>
            </div>
        </div>
    </div>
    <!-- /Socail Media Follows -->

      
    <div class="row">
        <div class="col-md-6 d-flex">						
            <!-- Available Doctors -->
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title">Available Doctors</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th class="text-center">Room Number</th>
                                    <th class="text-center">Time in</th>
                                    <th class="text-right">Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>PRE2209</div>
                                    </td>
                                    <td class="text-nowrap">Dr John Smith</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">98%</td>
                                    <td class="text-right">
                                        <span class="badge badge-danger">Serving A patient</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>PRE1245</div>
                                    </td>
                                    <td class="text-nowrap">Dr Jolie Hoskins</td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">99.5%</td>
                                    <td class="text-right">
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>PRE1625</div>
                                    </td>
                                    <td class="text-nowrap">Dr Pennington Joy</td>
                                    <td class="text-center">7</td>
                                    <td class="text-center">99.6%</td>
                                    <td class="text-right">
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>PRE2516</div>
                                    </td>
                                    <td class="text-nowrap">Dr Millie Marsden</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">98.2%</td>
                                    <td class="text-right">
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>PRE2209</div>
                                    </td>
                                    <td class="text-nowrap">Dr John Smith</td>
                                    <td class="text-center">9</td>
                                    <td class="text-center">98%</td>
                                    <td class="text-right">
                                        <span class="badge badge-danger">Serving A patient</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Star Students -->							
        </div>

        {{-- <div class="col-md-6 d-flex">						
            <!-- Feed Activity -->
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title">Medic Activity</h5>
                </div>
                <div class="card-body">
                    <ul class="activity-feed">
                        <li class="feed-item">
                            <div class="feed-date">Apr 13</div>
                            <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                        </li>
                        <li class="feed-item">
                            <div class="feed-date">Mar 21</div>
                            <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                        </li>
                        <li class="feed-item">
                            <div class="feed-date">Feb 2</div>
                            <span class="feed-text"><a>Justin Lee</a>attended internation conference in <a href="profile.html">"St.John School"</a></span>
                        </li>
                        <li class="feed-item">
                            <div class="feed-date">Apr 13</div>
                            <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                        </li>
                        <li class="feed-item">
                            <div class="feed-date">Mar 21</div>
                            <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Feed Activity -->							
        </div> --}}
    </div>

    
</div>


@endsection