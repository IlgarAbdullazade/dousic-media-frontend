@extends('layouts.main')

@section('page.title', 'Start New Stream')

@section('profile.content')
    <section class="main-content">
        <div class="main-content__wrapper">
            <div class="main-content__header main-content-header">
                <h2 class="main-content-header__title">Start New Stream</h2>
                <div class="main-content-header__actions">
                    <x-ui.button class="main-content-header__button primary">
                        <x-slot name='iconBefore'> <i class="fa-solid fa-tower-broadcast mr-2"></i>
                        </x-slot>
                        Live Streaming List
                    </x-ui.button>
                    <x-ui.button class="main-content-header__button primary">
                        <x-slot name='iconBefore'><i class="fa-solid fa-podcast mr-2"></i>
                        </x-slot>
                        Broadcast
                    </x-ui.button>
                </div>
            </div>
            <div class="main-content__body">
                <div class="start-stream">
                    <div class="start-stream__item stream-start-item">
                        <div class="stream-start-item__wrapper">
                            <div class="stream-start-item__info">
                                <div class="stream-start-item__header">
                                    <div class="stream-start-item__icon">
                                        <x-icons.device-streaming />
                                    </div>
                                    <h3 class="stream-start-item__title">Device Streaming</h3>
                                </div>
                                <p class="stream-start-item__text">A Device Stream is meant for in-real-time streaming from
                                    anywhere and any device. Use device streaming when you don't want to worry about pro
                                    level streaming requirements, but still may want to monitize your content.</p>
                            </div>
                            <x-ui.button-link href="{{ route('stream') }}" class="stream-start-item__button primary">
                                Start Device Stream
                            </x-ui.button-link>
                        </div>

                    </div>
                    <div class="start-stream__item stream-start-item">
                        <div class="stream-start-item__wrapper">
                            <div class="stream-start-item__info">
                                <div class="stream-start-item__header">
                                    <div class="stream-start-item__icon">
                                        <x-icons.conference-streaming />
                                    </div>
                                    <h3 class="stream-start-item__title">Conference Streaming</h3>
                                </div>
                                <p class="stream-start-item__text">A Conference Stream is effectively a live group chat
                                    session. However here in the Dousic Media ecosystem all content has value, so our
                                    Conference Streams can be recorded and used as content created for consumption and
                                    monitization!</p>
                            </div>
                            <x-ui.button-link href="{{ route('stream') }}" class="stream-start-item__button primary">
                                Start Conference Stream
                            </x-ui.button-link>
                        </div>
                    </div>
                    <div class="start-stream__item stream-start-item">
                        <div class="stream-start-item__wrapper">
                            <div class="stream-start-item__info">
                                <div class="stream-start-item__header">
                                    <div class="stream-start-item__icon">
                                        <x-icons.pro-streaming />
                                    </div>
                                    <h3 class="stream-start-item__title">Pro Streaming</h3>
                                </div>
                                <p class="stream-start-item__text">A Pro Stream is meant for studio and home studio setups
                                    typically used by live desktop/laptop streamers and satellite video event crews, etc.
                                    Pro level streaming does have some requirements for things like output video size,
                                    output frame rates, and more, but these requirements allow Pro Streaming content to be
                                    fully monitized within our entire ecosystem!</p>
                            </div>
                            <x-ui.button-link href="{{ route('stream') }}" class="stream-start-item__button primary">
                                Start Pro Stream
                            </x-ui.button-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
