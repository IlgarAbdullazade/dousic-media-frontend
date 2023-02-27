@extends('layouts.main')

@section('page.title', 'Upload Original Content')

@section('profile.content')
    <section class="main-content">
        <div class="main-content__wrapper">
            <div class="main-content__header main-content-header">
                <h2 class="main-content-header__title">Upload Original Content</h2>
            </div>
            <div class="main-content__body">
                <div class="upload-content">
                    <div class="upload-content__item">
                        <x-forms.upload-file />
                    </div>
                    <div class="upload-content__item">
                        <x-forms.upload-file />
                    </div>
                    <div class="upload-content__item">
                        <x-forms.upload-file />
                    </div>
                    <div class="upload-content__item">
                        <x-forms.upload-file />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
