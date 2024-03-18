@extends('client.layouts.master')

@section('content')

    <!-- Hero Start -->
    @include('client.components.banners.slideshow')
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    @include('client.components.features.featur')
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    @include('client.components.products.product')
    <!-- Fruits Shop End-->


    <!-- Banner Section Start-->
    @include('client.components.banners.banner')
    <!-- Banner Section End -->


    <!-- Bestsaler Product Start -->
    @include('client.components.sellers.bestseller')
    <!-- Bestsaler Product End -->


    <!-- Tastimonial Start -->
    @include('client.components.blogs.blog')
    <!-- Tastimonial End -->

@endsection()
