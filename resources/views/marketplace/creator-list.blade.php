@extends('layouts.marketplace')

@section('page.title', 'Marketplace')

@section('marketplace.content')
    <div class="creator-list">
        <div class="creator-list__wrapper">
            <x-common.creator-card class="creator-list__item" />
            <x-common.creator-card class="creator-list__item" />
            <x-common.creator-card class="creator-list__item" />
            <x-common.creator-card class="creator-list__item" />
            <x-common.creator-card class="creator-list__item" />
            <x-common.creator-card class="creator-list__item" />
        </div>
    </div>
@endsection
