@extends('layouts.base')

@section('page.title', 'Stream')

@section('content')
    @include('includes.header')

    <x-page>
        <section class="page__stream stream">
            <div class="stream__container">
                <div class="stream__wrapper">
                    <div class="stream__content stream-content">
                        <x-stream.video class="stream-content__video" />
                        <h1 class="stream-content__title">Starting from editing photos</h1>
                        <p class="stream-content__text">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            🎃
                            😹 It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
                            of the more obscure Latin words. 🩸</p>
                        <div class="stream-content__insights stream-insights">
                            <h3 class="stream-insights__title">Insights</h3>
                            <div class="stream-insights__row">
                                <div class="stream-insights__item insight-item">
                                    <i class="insight-item__icon fa-solid fa-eye"></i>
                                    <div class="insight-item__info">
                                        <b class="insight-item__title">1.7k</b>
                                        <span class="insight-item__caption">Viewers</span>
                                    </div>
                                </div>
                                <div class="stream-insights__item insight-item">
                                    <i class="insight-item__icon fa-solid fa-heart"></i>
                                    <div class="insight-item__info">
                                        <b class="insight-item__title">854</b>
                                        <span class="insight-item__caption">Likes</span>
                                    </div>
                                </div>
                                <div class="stream-insights__item insight-item">
                                    <i class="insight-item__icon fa-solid fa-comment-dots"></i>
                                    <div class="insight-item__info">
                                        <b class="insight-item__title">102</b>
                                        <span class="insight-item__caption">Comments</span>
                                    </div>
                                </div>
                                <div class="stream-insights__item insight-item">
                                    <i class="insight-item__icon fa-solid fa-share"></i>
                                    <div class="insight-item__info">
                                        <b class="insight-item__title">16</b>
                                        <span class="insight-item__caption">Share</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <x-stream.chat class="stream__chat" />
                </div>
            </div>
        </section>
    </x-page>
@endsection
