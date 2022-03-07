@extends('home-layout')
@section('contents')
<main id="main">
        <!-- ======= About Section ======= -->
        @include('user.include.about')
        <!-- ======= count ======= -->
        @include('user.include.count')
        <!-- ======= why-us ======= -->
        @include('user.include.why-us')
        
        <!-- ======= services ======= -->
        @include('user.include.services')
        <!-- ======= portfolio ======= -->
        @include('user.include.portfolio')
        <!-- ======= testimonials ======= -->
        @include('user.include.testimonials')
        <!-- ======= team ======= -->
        @include('user.include.team')
        <!-- ======= contact ======= -->
        @include('user.include.contact')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   @include('user.include.footer')
 
@endsection