@extends('backend.master')
@section('title')
   Admin
@endsection
@section('content')   
   <div class="content-wrapper">
      
      <section class="content mt-4">
         <div class="container-fluid">
            <div class="row">
        
               <div class="col-lg-3 col-6">
                  <div class="small-box bg-primary">
                     <div class="inner text-center">
                        <h3>{{$Home->count()}}</h3>
                        <p>Home image</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ route('home') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-dark">
                     <div class="inner text-center">
                        <h3>{{$ProductCategory->count()}}</h3>
                        <p>Product category</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-person-add"></i>
                     </div>
                     <a href="{{ route('product') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-secondary">
                     <div class="inner text-center">
                        <h3>{{$Product->count()}}</h3>
                        <p>Product</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-person-add"></i>
                     </div>
                     <a href="{{ route('product') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-danger">
                     <div class="inner text-center">
                        <h3>{{$UsefullLink->count()}}</h3>
                        <p>Usefull link</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                     </div>
                     <a href="{{ route('useful') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                     <div class="inner text-center">
                        <h3>{{$Leadership->count()}}</h3>
                        <p>Leadership</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-bag"></i>
                     </div>
                     <a href="{{ route('leadership') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                     <div class="inner text-center">
                        <h3>{{$SocialSite->count()}}</h3>
                        <p>Social site</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-person-add"></i>
                     </div>
                     <a href="{{ route('social') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                     <div class="inner text-center">
                        <h3>{{$Contact->count()}}</h3>
                        <p>Contact</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ route('contact') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>    

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                     <div class="inner text-center">
                        <h3>{{$Service->count()}}</h3>
                        <p>Service</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ route('service') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-primary">
                     <div class="inner text-center">
                        <h3>{{$RealEstate->count()}}</h3>
                        <p>Real-Estate</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ route('service') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-light">
                     <div class="inner text-center">
                        <h3>{{$ProfessionalNetwork->count()}}</h3>
                        <p>Professional network</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ route('professional-network') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

               <div class="col-lg-3 col-6">
                  <div class="small-box bg-dark">
                     <div class="inner text-center">
                        <h3>{{$ProfessionalNetService->count()}}</h3>
                        <p>Professional network service</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ route('professional-network') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>

            </div>           
         </div>
      </section>
      
   </div>
   <footer class="main-footer">
      <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script>
      All rights reserved.
   </footer>
@endsection