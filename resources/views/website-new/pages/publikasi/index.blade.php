@php use Illuminate\Support\Carbon; @endphp
@extends('website-new.layouts.index')

@section('styles')
    <style>
        .news_box{
            display: inline-block;
            border-radius: 5px;
            transition: 0.3s all;
            margin: 30px 0;
            @media (max-width:767px) {
                padding: 0 15px;
            }
            .news_img{
                position: relative;
                line-height: 0;
                background: transparent;
                border-radius: 5px;
                text-align: center;
                display: block;
                transition: .3s all;
                img{
                    border-radius: 5px;
                    width: 100%;
                    height: 100%;
                    @media (max-width:767px) {
                        height: auto;
                    }
                }
                .news_date{
                    position: absolute;
                    background: linear-gradient(45deg, rgb(109, 46, 192) 0%, rgb(0, 147, 226) 100%);
                    height: 60px;
                    width: 60px;
                    top: -20px;
                    left: 15px;
                    box-shadow: 5px 5px #FFF;
                    h2{
                        color: #FFF;
                        font-size: 14px;
                        text-align: center;
                        padding-top: 7px;
                        span{
                            font-size: 22px;
                            display: block;
                        }
                    }
                }
            }
            .news_detail{
                text-align: center;
                margin: -20px 15px 0 15px;
                position: relative;
                z-index: 1;
                background: #FFF;
                box-shadow: 0px 5px 20px 0px #e5e4e48c;
                padding: 20px;
                border-radius: 5px;
                @media (max-width: 575px){
                    margin: -15px 10px 0 10px;
                    padding: 15px 10px;
                }
                a{
                    font-size: 16px;
                    color: $theme;
                    font-family: 'Montserrat', sans-serif;
                    text-align: center;
                    line-height: 24px;
                    font-weight: 600;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }
                p{
                    font-size: 14px;
                    color: #232323;
                    line-height: 26px;
                    margin-top: 10px;
                    text-align: center;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }
                .read-more{
                    color: $theme;
                    i{
                        margin-left: 5px;
                        transition: all ease 0.5s 0s;
                    }
                }
            }
            &:hover{
                .news_img{
                    background: linear-gradient(45deg, rgb(109, 46, 192) 0%, rgb(0, 147, 226) 100%);
                    transition: .3s all;
                    img{
                        opacity: 0.5;
                        border-radius: 5px 5px 0 0;
                        transition: all ease 0.5s 0s;
                    }
                }
            }
        }
    </style>
@endsection
@section('content')

    <!-- BREADCRUMB START HERE -->
    <section class="breadcrumb_wrapper about">
        <div class="container">
            <div class="breadcrumb_block">
                <div>
                    <h1>{{ $title }}</h1>
                    <div class="trackPage">
                        <a href="{{ route('home') }}">Beranda</a>
                        <span>{{ $title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB END HERE -->
    <!-- ABOUT BLOCK SECTION START HERE -->
    <section class="about_wrapper default-padding">
        <div class="container">
            <div class="row align-items-center">
                @foreach($publications as $article)
                        <div class="news_box col-lg-4">
                            <a href="{{ route('publikasi.detail', $article->id) }}" class="news_img">
                                <img loading="lazy" src="{{ asset($article->image) }}"
                                     alt="news" width="370"
                                     height="200">
                                <div class="news_date">
                                    <h2><span>{{ Carbon::createFromDate($article->date)->format('d') }}</span>{{ Carbon::createFromDate($article->date)->format('M') }}</h2>
                                </div>
                            </a>
                            <div class="news_detail">
                                <a href="{{ route('publikasi.detail', $article->id) }}">{{ $article->title }}</a>
                                {!! $article->content !!}
                                <a href="{{ route('publikasi.detail', $article->id) }}" class="read-more">Read More <i
                                        class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ABOUT BLOCK SECTION END'S HERE -->
@endsection
