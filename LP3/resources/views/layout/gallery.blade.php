@extends('layout.master')

@section('title')
gallery
@endsection
@section('style')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/card.css') }}">
@endsection

@section('content')


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
     
            <div class="col-lg-12">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src='{{asset("images/$show->image")}}' class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                           <h4 style="color:red">YOUR Name:{{$show->name}}</h4>
                            <h4 style="color:red"> address:{{$show->address}}</h4>
                            <h4 style="color:red"> National ID Number:{{$show->NID}}</h4>
                            <p class="text-muted" style="color:red> <span> your Phone Number{{$show->mobile}}| </span><span><a href="#" class="text-pink">{{$show->email}}</a></span></p>
                        </div>
                       <a href="gallery/{{$show->id}}"> <button type="submit"  class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View  </button></a>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
   
    <!-- container -->

 
@endsection