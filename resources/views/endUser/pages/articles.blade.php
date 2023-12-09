@extends('endUser.Layouts.master')

@section('title', 'Faqs')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1>Articles</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Articles
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->
@endsection
