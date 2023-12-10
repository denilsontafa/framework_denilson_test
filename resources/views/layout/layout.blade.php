<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<!-- Menu container mobile -->
<div class="menu-container-mobile display-none">
    <div class="header-menu-container-mobile">
        <div class="left-header-menu-container-mobile">
            <p class="copy-body-text logo text-colour-white-100 fade-in">Cottage retreat</p>
        </div>
        <div class="right-header-menu-container-mobile fade-in">
            <svg class="close-button-menu-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <line x1="18.2561" y1="1.37395" x2="0.44669" y2="19.1834" stroke="#F7FAF6" stroke-width="1.25932"/>
                <line y1="-0.629659" x2="25.1864" y2="-0.629659" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1.26013 0.929199)" stroke="#F7FAF6" stroke-width="1.25932"/>
            </svg>
        </div>
    </div>
    <div class="menu-container-mobile-nav-links">
        <nav>
            <ul class="heading-m button-underlined text-colour-white-100 fade-in">Nav button 1</ul>
            <ul class="heading-m button-underlined text-colour-white-100 fade-in">Nav button 2</ul>
            <ul class="heading-m button-underlined text-colour-white-100 fade-in">Nav button 3</ul>
        </nav>
        <div class="menu-container-mobile-footer-links">
            <p class="copy-body-text button-underlined text-colour-white-100 fade-in">Privacy</p>
            <p class="copy-body-text button-underlined text-colour-white-100 fade-in">Terms & Conditions</p>
        </div>
    </div>
</div>

<!-- Header -->
<header class="header">
    <div class="left-header">
        <p class="copy-body-text logo text-colour-green-100 fade-in">Cottage retreat</p>
    </div>
    <div class="right-header">
        <nav>
            <ul class="copy-body-text button-underlined text-colour-green-100 fade-in">Nav button 1</ul>
            <ul class="copy-body-text button-underlined text-colour-green-100 fade-in">Nav button 2</ul>
            <ul class="copy-body-text button-underlined text-colour-green-100 fade-in">Nav button 3</ul>
        </nav>
        <div class="menu-hamburger fade-in">
            <svg class="menu-hamburger-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12" fill="none">
                <line x1="20" y1="1" x2="-8.74228e-08" y2="0.999998" stroke="" stroke-width="2"/>
                <line x1="20" y1="6" x2="-8.74228e-08" y2="6" stroke="" stroke-width="2"/>
                <line x1="20" y1="11" x2="-8.74228e-08" y2="11" stroke="" stroke-width="2"/>
            </svg>
        </div>
    </div>
</header>

<!-- Main content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="separator"></div>
    <div class="container-header-in-footer">
        <div class="left-footer">
            <p class="copy-body-text logo text-colour-green-100 fade-in">Cottage retreat</p>
        </div>
        <div class="right-footer">
            <nav>
                <ul class="copy-body-text button-underlined text-colour-green-100 fade-in">Nav button 1</ul>
                <ul class="copy-body-text button-underlined text-colour-green-100 fade-in">Nav button 2</ul>
                <ul class="copy-body-text button-underlined text-colour-green-100 fade-in">Nav button 3</ul>
                <ul class="copy-body-text button-underlined text-colour-green-100 fade-in nav-ul-mobile-d-none">Privacy</ul>
                <ul class="copy-body-text button-underlined text-colour-green-100 fade-in nav-ul-mobile-d-none">Terms & Conditions</ul>
            </nav>
        </div>
    </div>
    <div class="container-bottom-footer">
        <div class="container-bottom-footer-first">
            <p class="copy-s-body-text text-colour-green-100 fade-in">Company name © 2023. All rights Reserved.</p>
            <p class="copy-body-text text-colour-green-100 button-underlined footer-link-mobile-d-none fade-in">Privacy</p>
        </div>
        <div class="container-bottom-footer-second">
            <div class="container-bottom-footer-design-by fade-in">
                <p class="copy-s-body-text text-colour-green-100">Design by</p>
                <a href="/" class="footer-link">
                    <svg class="footer-link-svg" xmlns="http://www.w3.org/2000/svg" width="73" height="11" viewBox="0 0 73 11" fill="none">
                        <path d="M70.1861 9.7152L67.3569 6.11177C67.3318 6.07969 67.3323 6.0337 67.3585 6.00215L69.799 3.0623C69.8776 2.96766 69.8102 2.82489 69.6872 2.82489H67.8703C67.8093 2.82489 67.751 2.85109 67.7109 2.89708L65.2074 5.76314C65.1946 5.77811 65.17 5.76902 65.17 5.74923V0.213885C65.17 0.0957136 65.0743 0 64.9561 0H63.4364C63.3182 0 63.2225 0.0957136 63.2225 0.213885V9.78792C63.2225 9.90609 63.3182 10.0018 63.4364 10.0018H64.9561C65.0743 10.0018 65.17 9.90609 65.17 9.78792V8.3057C65.17 8.27736 65.1807 8.25009 65.1999 8.22923L65.9389 7.43358C65.948 7.42396 65.9629 7.42449 65.971 7.43465L68.0007 9.92267C68.0414 9.9724 68.1023 10.0013 68.1665 10.0013H70.0471C70.1947 10.0013 70.2775 9.83123 70.1861 9.7152ZM69.6487 2.99172C69.6487 2.99172 69.6466 2.98744 69.6455 2.9853H69.6541L69.6487 2.99172Z" fill="#2E4845"/>
                        <path d="M5.80699 0.0126038H0.219233C0.0983873 0.0126038 0 0.110991 0 0.231836V9.77112C0 9.89197 0.0983873 9.99035 0.219233 9.99035H1.88219C1.99823 9.99035 2.09608 9.89731 2.09608 9.78716V6.2741C2.09608 6.23613 2.12656 6.21528 2.1549 6.21528H5.55568C5.67652 6.21528 5.77491 6.11689 5.77491 5.99605V4.41864C5.77491 4.2978 5.67652 4.19941 5.55568 4.19941H2.1549C2.118 4.19941 2.09608 4.16946 2.09608 4.14059V2.08729C2.09608 2.0504 2.12602 2.02847 2.1549 2.02847H5.80699C5.92784 2.02847 6.02623 1.93009 6.02623 1.80924V0.231836C6.02623 0.110991 5.92784 0.0126038 5.80699 0.0126038Z" fill="#2E4845"/>
                        <path d="M10.9527 2.69197C10.1378 2.73314 9.4721 3.09407 9.09299 3.69188C9.08122 3.71006 9.05342 3.70257 9.05342 3.68065V3.039C9.05342 2.91815 8.95503 2.81976 8.83418 2.81976H7.29956C7.17871 2.81976 7.08032 2.91815 7.08032 3.039V9.77638C7.08032 9.89722 7.17924 9.99561 7.29956 9.99561H8.83418C8.95503 9.99561 9.05342 9.89722 9.05342 9.77638V6.56275C9.05342 6.02323 9.2149 5.5976 9.53359 5.29709C9.87206 4.97733 10.3897 4.81317 10.9511 4.84633C11.0099 4.85114 11.0693 4.82975 11.1137 4.78858C11.1575 4.74794 11.1816 4.69233 11.1816 4.63244V2.89997C11.1816 2.83367 11.1522 2.77057 11.1035 2.731C11.0607 2.69625 11.0062 2.68234 10.9527 2.69143V2.69197Z" fill="#2E4845"/>
                        <path d="M19.2007 2.80924H17.6554C17.5345 2.80871 17.4362 2.9071 17.4362 3.02794V3.45411C17.4362 3.47336 17.4132 3.48245 17.3998 3.46854C16.8603 2.9103 16.1127 2.61621 15.2278 2.61621C14.2979 2.61621 13.4247 3.00388 12.7681 3.7081C12.1061 4.4182 11.7415 5.37319 11.7415 6.39717C11.7415 7.42115 12.1061 8.37508 12.7692 9.08357C13.4258 9.78565 14.3011 10.1722 15.2331 10.1722C16.1651 10.1722 16.8651 9.8819 17.3998 9.33061C17.4132 9.31671 17.4362 9.3258 17.4362 9.34505V9.77121C17.4362 9.89153 17.5345 9.99045 17.6554 9.99045H19.19C19.3109 9.99045 19.4092 9.89206 19.4092 9.77121V3.03275C19.4092 2.91939 19.3216 2.82475 19.2007 2.80871V2.80924ZM17.4415 6.40198C17.4415 7.51954 16.672 8.30022 15.57 8.30022C14.468 8.30022 13.7145 7.51954 13.7145 6.40198C13.7145 5.28443 14.4776 4.50375 15.57 4.50375C16.6624 4.50375 17.4415 5.28443 17.4415 6.40198Z" fill="#2E4845"/>
                        <path d="M28.2957 2.61411C27.4134 2.61411 26.699 2.93493 26.2242 3.5429C26.2157 3.55413 26.1985 3.5536 26.1905 3.54183C25.7686 2.93814 25.1157 2.61945 24.296 2.61945C23.5287 2.61945 22.9004 2.87184 22.4668 3.35361C22.4534 3.36805 22.4299 3.3595 22.4299 3.33971V3.03118C22.4299 2.91034 22.3315 2.81195 22.2106 2.81195H20.676C20.5552 2.81195 20.4568 2.91034 20.4568 3.03118V9.76858C20.4568 9.88889 20.5552 9.98781 20.676 9.98781H22.2106C22.3315 9.98781 22.4299 9.88942 22.4299 9.76858V5.96141C22.4299 5.02032 22.8935 4.45887 23.6704 4.45887C24.3671 4.45887 24.7666 4.91498 24.7666 5.7101V9.76858C24.7666 9.88889 24.865 9.98781 24.9858 9.98781H26.5204C26.6413 9.98781 26.7397 9.88942 26.7397 9.76858V5.96141C26.7397 4.99251 27.1744 4.45887 27.9642 4.45887C28.6609 4.45887 29.0603 4.91498 29.0603 5.7101V9.76858C29.0603 9.88889 29.1587 9.98781 29.2796 9.98781H30.8142C30.935 9.98781 31.0334 9.88942 31.0334 9.76858V5.58711C31.0334 3.78673 29.9587 2.61945 28.2957 2.61411Z" fill="#2E4845"/>
                        <path d="M35.589 2.61411C33.3983 2.61411 31.8086 4.20381 31.8086 6.39452C31.8086 8.58524 33.4224 10.1749 35.7334 10.1749C36.9012 10.1749 37.8835 9.77177 38.5733 9.0098C38.6139 8.96489 38.6337 8.90393 38.6267 8.84244C38.6198 8.77988 38.5856 8.72266 38.5332 8.68684L37.3627 7.88477C37.2798 7.82649 37.1686 7.83344 37.091 7.90188C36.7568 8.2088 36.2841 8.37831 35.7601 8.37831C34.811 8.37831 34.1533 7.97727 33.8983 7.24686C33.8934 7.23295 33.9041 7.21798 33.9186 7.21798H38.9518C39.054 7.21798 39.1475 7.13671 39.1646 7.03297C39.2021 6.80411 39.2192 6.60092 39.2192 6.39452C39.2192 4.2391 37.6584 2.61411 35.5885 2.61411H35.589ZM37.2044 5.66731H33.8886C33.8742 5.66731 33.864 5.65341 33.8678 5.64004C33.887 5.57481 33.9084 5.50851 33.9357 5.44648C34.2095 4.77541 34.7982 4.40539 35.5938 4.40539C36.3895 4.40539 37.006 4.86845 37.2247 5.63951C37.2284 5.65341 37.2183 5.66731 37.2039 5.66731H37.2044Z" fill="#2E4845"/>
                        <path d="M49.7255 2.81562H48.0214C47.923 2.81562 47.8364 2.88139 47.8102 2.97549L46.7407 6.84682C46.7349 6.86767 46.706 6.86767 46.6996 6.84682L45.5531 2.97015C45.528 2.87871 45.4435 2.81455 45.3473 2.81455H43.8394C43.7431 2.81455 43.6586 2.87871 43.634 2.96801L42.4876 6.83613C42.4817 6.85644 42.4523 6.85644 42.4464 6.83613L41.377 2.97496C41.3519 2.88192 41.2631 2.81401 41.1658 2.81401H39.4708C39.4184 2.81401 39.3697 2.83807 39.3376 2.88032C39.3045 2.92416 39.2932 2.97977 39.3087 3.03592L41.4679 9.83426C41.4936 9.92891 41.5781 9.99468 41.6738 9.99468H43.1977C43.2929 9.99468 43.3779 9.92837 43.403 9.8364L44.5415 6.0918C44.5554 6.04528 44.6211 6.04528 44.6356 6.0918L45.774 9.83587C45.8018 9.92784 45.8879 9.99468 45.9793 9.99468H47.5032C47.5984 9.99468 47.6834 9.92837 47.708 9.83694L49.8683 3.04073L49.8693 3.03752C49.8832 2.98672 49.8736 2.93218 49.8437 2.8878C49.8153 2.84609 49.7726 2.81882 49.726 2.81348L49.7255 2.81562Z" fill="#2E4845"/>
                        <path d="M53.6349 2.6199C51.5153 2.6199 49.8545 4.28072 49.8545 6.40032C49.8545 7.42804 50.2448 8.38357 50.9528 9.08993C51.6581 9.79361 52.6067 10.1807 53.6242 10.1807H53.6349C55.7636 10.1807 57.4314 8.52046 57.4314 6.40032C57.4314 4.28019 55.7636 2.6199 53.6349 2.6199ZM55.4636 6.40032C55.4636 7.47563 54.6947 8.25578 53.6349 8.25578C52.5847 8.25578 51.8222 7.47563 51.8222 6.40032C51.8222 5.32502 52.5847 4.54487 53.6349 4.54487C54.6851 4.54487 55.4636 5.32502 55.4636 6.40032Z" fill="#2E4845"/>
                        <path d="M62.1369 2.69197C61.322 2.73314 60.6563 3.09407 60.2772 3.69188C60.2654 3.71006 60.2376 3.70258 60.2376 3.68065V3.039C60.2376 2.91815 60.1392 2.81976 60.0184 2.81976H58.4838C58.3629 2.81976 58.2645 2.91815 58.2645 3.039V9.77639C58.2645 9.89616 58.3672 10.001 58.4838 10.001H60.0184C60.1392 10.001 60.2376 9.90044 60.2376 9.77639V6.56276C60.2376 6.02323 60.3991 5.5976 60.7178 5.29709C61.0563 4.97787 61.5733 4.81371 62.1353 4.84633C62.1947 4.85061 62.2535 4.82975 62.2979 4.78858C62.3417 4.74794 62.3658 4.69233 62.3658 4.63244V2.89997C62.3658 2.83367 62.3364 2.77057 62.2877 2.731C62.2449 2.69625 62.1904 2.68234 62.1369 2.69143V2.69197Z" fill="#2E4845"/>
                        <path d="M71.7327 7.65326C71.0339 7.65326 70.4655 8.22166 70.4655 8.92053C70.4655 9.6194 71.0339 10.1878 71.7327 10.1878C72.4316 10.1878 73 9.6194 73 8.92053C73 8.22166 72.4316 7.65326 71.7327 7.65326Z" fill="#2E4845"/>
                    </svg>
                </a>
            </div>
            <p class="copy-body-text text-colour-green-100 button-underlined footer-link-mobile-d-none fade-in">Terms & Conditions</p>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function(){
        $('.menu-hamburger').click(function(){
            $('.menu-container-mobile').toggle('display-none');
            $('.menu-container-mobile').animate({
                'height' : '100%'
            }, 1000);
        });
        $('.close-button-menu-mobile').click(function(){
            $('.menu-container-mobile').animate({
                'height' : '0'
            }, 1000);
            $('.menu-container-mobile').toggle('display-none');
        });


        // Fade in animation
        const elements = document.querySelectorAll('.fade-in');

        const fadeInOptions = {threshold: 0.5};

        function fadeIn(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }

        const observer = new IntersectionObserver(fadeIn, fadeInOptions);

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

</body>
</html>
