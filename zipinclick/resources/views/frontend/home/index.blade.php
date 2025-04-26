@extends('frontend.layouts.master')


@section('content')

    <!--========================== Banner Section Start ==========================-->
    @include('frontend.home.sections.banner')
    <!--========================== Banner Section End ==========================-->

    <!-- ======================== category Section Start =========================== -->
    @include('frontend.home.sections.category')
    <!-- ======================== category Section End =========================== -->

    <!-- =========================== product Product Section Start ========================== -->
    @include('frontend.home.sections.product')
    <!-- =========================== product Product Section End ========================== -->

    <!-- ======================= Featured Products Start =============================== -->
    @include('frontend.home.sections.featured-product')
    <!-- ======================= Featured Products End =============================== -->

    <!-- ======================= Selling Products Start ========================= -->
    @include('frontend.home.sections.selling-product')
    <!-- ======================= Selling Products End ========================= -->

    <!-- ======================= To Featured Author Start =============================== -->
    @include('frontend.home.sections.featured-author-product')
    <!-- ======================= To Featured Author End =============================== -->

    <!-- =======================  Counter Start =============================== -->
    @include('frontend.home.sections.counter')
    <!-- =======================  Counter Author End =============================== -->

    <!-- ======================= Become seller section start ==================== -->
    @include('frontend.home.sections.become-seller')
    <!-- ======================= Become seller section End ==================== -->
@endsection
