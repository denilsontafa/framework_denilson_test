@extends('layout.layout')
@section('title', 'Home | Cottage retreat')

<link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

@section('content')
    <section class="first-section">
        <h1 class="heading-l text-colour-green-100 fade-in">Lorem ipsum dolor sit amet consectetur. Et at quam ac vitae.</h1>
        <img class="image-view" src="{{asset('images/01.jpeg')}}" alt="first-image">
    </section>

    <section class="second-section">
        <p class="subheading text-colour-green-100 fade-in">Subheading</p>
        <h2 class="heading-m text-colour-green-100 fade-in">Lorem ipsum dolor sit amet consectetur. Nibh ut nullam senectus sit vitae vitae ultricies.</h2>
        <p class="copy-body-text text-colour-green-100 fade-in">Lorem ipsum dolor sit amet consectetur. Lorem ut eu enim dolor in diam velit diam. Pretium nulla eget mattis feugiat vel neque augue nisl vitae. Egestas sed erat molestie cras accumsan purus tincidunt. Elementum ultrices quis est semper donec tortor. Lacus.</p>
        <button class="button-solid fade-in">
            CTA Button
            <svg class="button-solid-svg fade-in" xmlns="http://www.w3.org/2000/svg" width="28" height="12" viewBox="0 0 28 12" fill="none">
                <path d="M0 6H26.5M26.5 6L21.5 1M26.5 6L21.5 11" stroke=""/>
            </svg>
        </button>
    </section>

    <section class="third-section">
        <div class="gallery">
            <div class="gallery-row gallery-row-1">
                <img class="fade-in" src="{{asset('images/02.jpeg')}}" alt="">
                <img class="fade-in" src="{{asset('images/03.jpeg')}}" alt="">
            </div>
            <div class="gallery-row gallery-row-2">
                <img class="fade-in" src="{{asset('images/04.jpeg')}}" alt="">
            </div>
            <div class="gallery-row gallery-row-3">
                <img class="fade-in" src="{{asset('images/05.jpeg')}}" alt="">
                <img class="fade-in" src="{{asset('images/06.jpeg')}}" alt="">
            </div>
            <div class="gallery-row gallery-row-4">
                <img class="fade-in" src="{{asset('images/07.jpeg')}}" alt="">
                <img class="fade-in" src="{{asset('images/08.jpeg')}}" alt="">
            </div>
        </div>
    </section>

    <section class="fourth-section">
        <div class="faq">
            <h1 class="heading-l text-colour-green-100 fade-in">Heading text here...</h1>
            <p class="copy-body-text text-colour-green-100 fade-in">Lorem ipsum dolor sit amet consectetur. Malesuada sit consequat tristique consectetur sit tristique amet in. Etiam egestas elit vestibulum commodo.</p>
            <div class="accordion">
                <!-- First accordion item -->
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <h5 class="copy-body-text text-colour-green-100">01</h5>
                            <h5 class="heading-xs text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Ac posuere accumsan?</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                            <line class="horizontal-line-accordion-item-icon-svg" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845"/>
                            <line y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845"/>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p class="copy-body-text text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo convallis facilisis phasellus. Feugiat ac pretium augue pharetra adipiscing. In dictum vitae nunc urna. Tincidunt augue diam amet tincidunt amet. Tellus pharetra nunc etiam laoreet non ultricies a suspendisse. At.</p>
                    </div>
                </div>

                <!-- Second accordion item -->
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <h5 class="copy-body-text text-colour-green-100">02</h5>
                            <h5 class="heading-xs text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Ac posuere accumsan?</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                            <line class="horizontal-line-accordion-item-icon-svg" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845"/>
                            <line y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845"/>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p class="copy-body-text text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo convallis facilisis phasellus. Feugiat ac pretium augue pharetra adipiscing. In dictum vitae nunc urna. Tincidunt augue diam amet tincidunt amet. Tellus pharetra nunc etiam laoreet non ultricies a suspendisse. At.</p>
                    </div>
                </div>

                <!-- Third accordion item -->
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <h5 class="copy-body-text text-colour-green-100">03</h5>
                            <h5 class="heading-xs text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Ac posuere accumsan?</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                            <line class="horizontal-line-accordion-item-icon-svg" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845"/>
                            <line y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845"/>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p class="copy-body-text text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo convallis facilisis phasellus. Feugiat ac pretium augue pharetra adipiscing. In dictum vitae nunc urna. Tincidunt augue diam amet tincidunt amet. Tellus pharetra nunc etiam laoreet non ultricies a suspendisse. At.</p>
                    </div>
                </div>

                <!-- Fourth accordion item -->
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <h5 class="copy-body-text text-colour-green-100">04</h5>
                            <h5 class="heading-xs text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Ac posuere accumsan?</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                            <line class="horizontal-line-accordion-item-icon-svg" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845"/>
                            <line y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845"/>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p class="copy-body-text text-colour-green-100">Lorem ipsum dolor sit amet consectetur. Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo convallis facilisis phasellus. Feugiat ac pretium augue pharetra adipiscing. In dictum vitae nunc urna. Tincidunt augue diam amet tincidunt amet. Tellus pharetra nunc etiam laoreet non ultricies a suspendisse. At.</p>
                    </div>
                </div>

                <button class="button-solid fade-in">
                    CTA Button
                    <svg class="button-solid-svg" xmlns="http://www.w3.org/2000/svg" width="28" height="12" viewBox="0 0 28 12" fill="none">
                        <path d="M0 6H26.5M26.5 6L21.5 1M26.5 6L21.5 11" stroke=""/>
                    </svg>
                </button>

            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.accordion-item').click(function() {
                const content = $(this).find('.accordion-content');
                content.slideToggle();
                $('.accordion-content').not(content).slideUp();

                const icon = $(this).find('.horizontal-line-accordion-item-icon-svg');
                icon.toggleClass('display-none');
                $('.horizontal-line-accordion-item-icon-svg').not(icon).removeClass('display-none');
            });
        });
    </script>
@endsection
