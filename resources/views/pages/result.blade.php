@extends('layouts/others')

@section('content')
<div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <div class="loader-element">
        <span class="loader-animated-dot"></span>
        <img src="{{asset ('assets/img/brand/AutosAndCarsTalkLOGO1.svg')}}" height="80" alt="Impact logo">
    </div>
</div>

<section class="section-header pb-6 pb-lg-10 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-1 mb-4">VIN Information Availability</h1>
                <div style="display: inline-flex;">
                    <div style="padding-right:10px;"><a href="#"><small class="text-muted"  data-toggle="tooltip" data-placement="left" title="A vehicle identification number is a unique code, including a serial number, used by the automotive industry to identify individual motor vehicles, towed vehicles, motorcycles, scooters and mopeds, as defined in ISO 3779 and ISO 4030.">What is a VIN? </small></a></div>
                    <div style="padding-left:10px;"><a href="#"><small class="text-muted" data-toggle="tooltip" data-placement="right" title="You can find your VIN through the lower right of the windshield, and under the hood of your front engine.  As for Motorcycle VIN, you can lookup your VIN on the motorcycle frame.">Where can you find it?</small></a></div>
                    <br>

                </div>
                
                <div class="vinTitle">
                    <br>
                    <h1 style="text-transform: uppercase;"><?php 
                    if(!empty($data->vin)){
                        echo $data->vin;
                    }else{
                        echo $vinNum;
                    } ?></h1>
                </div>
                <?php
                    $successImage = '"https://images.vexels.com/media/users/3/157932/isolated/preview/951a617272553f49e75548e212ed947f-curved-check-mark-icon-by-vexels.png"';
                    $simg = "<img src=$successImage  width='18px'/>";  

                    $errorImage = '"https://sterlingpropertysolutions.co.uk/wp-content/uploads/2019/01/Red-Cross-PNG-Clipart-300x257.png"';
                    $eimg = "<img src=$errorImage  width='15px'/>";  
                    
                    if($data->success){
                        echo $simg . '<p style="color:#75bb48; font-weight:900;">VIN Found</p>';
                    }else{
                        echo $eimg . ' <p style="color:#f81104; font-weight:900;">VIN Not Found</p>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-ld">
    <div>
    <div class="container">
        <div style="display: inline-flex;">
            <div>
                <h3 style="color: #0849B3">FREE VIN REPORT</h3>
            </div>
            <div>
                <span class="badge badge-alt dbtnl" style="text-transform: uppercase; color:green">{{$data->specification->year .' '. $data->specification->make .' '. $data->specification->model}}</span>
                <span class="badge badge-warning " data-toggle="tooltip" data-placement="top" title="{{ date('l jS \of F Y h:i:s A')}}">
                     Generated on
                  </span>
            </div>
        </div>
        <div class="row">           
            <div class="col-md-6">
                <div class="table-responsive">
                    <div>
                        <table class="table align-items-center">
                            <tbody>
                                <tr>
                                    <th scope="col" class="sort" data-sort="year">Style</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->style}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">Made in</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->made_in}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">Steering type</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->steering_type}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">ABS</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->anti_brake_system}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" data-sort="make">Transmission</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->transmission}}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="table-responsive">
                    <div>
                        <table class="table align-items-center">
                            <tbody>
                                <tr>
                                    <th scope="col" class="sort" >Year</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->year}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Make</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->make}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Model</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->model}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Trim Level</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->trim_level}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="sort" >Engine</th>
                                    <td class="budget">
                                        <span class="name mb-0 text-sm">{{$data->specification->engine}}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="dbtn">
            <a href="/{{$vinNum}}/vehicle-specification" class="badge badge-info dbtnl">View Detailed Vehicle Specification</a>
           <a href="#" class="badge badge-danger">View Full Vehicle History Report Here!</a>

        </div>
        
    </div>
</section>

{{-- <section class="section section-lg bg-soft">
<div class="container">
<div class="row">
    <div class="col-12 col-lg-8">
        <h2 class="h1 font-weight-light mb-3"><strong>Open source</strong> project</h2>
        <p class="lead mb-4">Impact design system is an open source project featuring premium components, front pages and a dashboard. There's also a Pro version available with more components, pages and plugins.</p>
        <div class="d-flex align-items-center">
            <a href="https://github.com/creativetimofficial/impact-design-system" target="_blank" class="btn btn-secondary mr-4 animate-up-2">
                View on GitHub
            </a>
            <!-- Place this tag where you want the button to render. -->
            <div class="mt-2">
                <!-- Place this tag where you want the button to render. -->
                <a class="github-button" href="https://github.com/creativetimofficial/impact-design-system" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/pixel-bootstrap-ui-kit on GitHub">Star</a>                            
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="github-big-icon">
          <span class="fab fa-github"></span>
        </div>
      </div>
</div>
<div class="row mt-6">
    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="card border-light p-4">
            <!-- Header -->
            <div class="card-header bg-white pb-0">
                <span class="d-block">
                    <span class="h3 text-gray font-weight-bold align-top">
                        Free Version
                    </span>
                </span>
            </div>
            <!-- End Header -->
            <!-- Content -->
            <div class="card-body">
                <ul class="list-group list-group-flush price-list mb-4">
                    <li class="list-group-item bg-white pl-0"><strong>100</strong> Components</li>
                    <li class="list-group-item bg-white pl-0"><strong>5</strong> Front Pages</li>
                    <li class="list-group-item bg-white pl-0"><strong>4</strong> Dashboard Pages</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Premium plugins</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Charts</li>
                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Premium Support</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 mt-lg-n4">
        <div class="card border-light p-4">
            <!-- Header -->
            <div class="card-header bg-white pb-0">
                <span class="d-block">
                    <span class="h3 text-primary font-weight-bold align-top">
                       Pro Version
                    </span>
                </span>
            </div>
            <!-- End Header -->
            <!-- Content -->
            <div class="card-body">
                <ul class="list-group list-group-flush price-list mb-5">
                    <li class="list-group-item bg-white pl-0"><strong>1500+</strong> Components</li>
                    <li class="list-group-item bg-white pl-0"><strong>25</strong> Front Pages</li>
                    <li class="list-group-item bg-white pl-0"><strong>20+</strong> Dashboard Pages</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Premium plugins</li>
                    <li class="list-group-item bg-white pl-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Charts</li>
                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Premium Support</li>
                </ul>
                <a href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank" class="btn btn-block btn-primary animate-up-2"><span class="fas fa-paper-plane mr-2"></span> Upgrade to Pro</a>
            </div>
        </div>
    </div>
</div>
</div>
</section> --}}


@endsection
