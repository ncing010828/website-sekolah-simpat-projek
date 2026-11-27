
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMPATI - Sistem Manajemen PKL</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [data-nav-link].nav-active::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3px;
            background: #f5b900;
            border-radius: 999px;
        }

        @media (max-width: 768px) {
            [data-nav-link].nav-active::after {
                left: 14px;
                width: calc(100% - 28px);
            }
        }
    </style>
</head>

<body class="bg-white text-[#202b38]">

    @include('components.landing.navbar')

    <main class="bg-white text-[#202b38]">

        @include('components.landing.hero')

        @include('components.landing.features')

        @include('components.landing.about')

        @include('components.landing.roles')

        @include('components.landing.benefits')

        @include('components.landing.testimonials')

        @include('components.landing.footer')

    </main>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');
        const navLinks = document.querySelectorAll('[data-nav-link]');

        function setActiveLink(activeLink) {
            navLinks.forEach(function (link) {
                link.classList.remove('font-bold', 'text-white', 'nav-active');
                link.classList.add('font-medium', 'text-white/80');
            });

            activeLink.classList.remove('font-medium', 'text-white/80');
            activeLink.classList.add('font-bold', 'text-white', 'nav-active');
        }

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                setActiveLink(link);
                navMenu.classList.add('hidden');
                navMenu.classList.remove('flex');
                menuToggle.setAttribute('aria-expanded', false);
            });
        });

        menuToggle.addEventListener('click', function () {
            const isOpen = navMenu.classList.contains('flex');

            navMenu.classList.toggle('hidden');
            navMenu.classList.toggle('flex');
            menuToggle.setAttribute('aria-expanded', !isOpen);
        });

        const testimonialTrack = document.getElementById('testimonialTrack');
        const testimonialCards = Array.from(
            testimonialTrack.querySelectorAll('article')
        );
        const testimonialPagination = document.getElementById('testimonialPagination');

        let testimonialsPerPage = 3;
        let testimonialPageCount = 1;
        let activeTestimonialPage = 0;

        function getTestimonialPageCount() {
            testimonialsPerPage = 3;

            return Math.max(
                1,
                Math.ceil(testimonialCards.length / testimonialsPerPage)
            );
        }

        function equalizeTestimonialCards() {
            testimonialCards.forEach(card => {
                card.style.minHeight = '';
            });

            const visibleCards = testimonialCards.filter(
                card => card.style.display !== 'none'
            );

            if (visibleCards.length <= 1) return;

            const measurement = document.createElement('div');

            measurement.className = 'grid grid-cols-1 items-stretch gap-2';

            measurement.style.cssText = `
                position:fixed;
                left:-10000px;
                top:0;
                width:${testimonialTrack.clientWidth}px;
                visibility:hidden;
            `;

            visibleCards.forEach(card => {
                const clone = card.cloneNode(true);

                clone.style.display = 'flex';
                clone.style.height = 'auto';
                clone.style.minHeight = '0';

                measurement.appendChild(clone);
            });

            document.body.appendChild(measurement);

            const maxHeight = Math.max(
                ...Array.from(
                    measurement.children,
                    card => card.getBoundingClientRect().height
                )
            );

            measurement.remove();

            visibleCards.forEach(card => {
                card.style.minHeight = `${Math.ceil(maxHeight)}px`;
            });
        }

        function showTestimonialPage(page) {
            testimonialCards.forEach((card, index) => {
                card.style.display =
                    index >= page * testimonialsPerPage &&
                    index < (page + 1) * testimonialsPerPage
                        ? 'flex'
                        : 'none';
            });

            equalizeTestimonialCards();
        }

        function goToTestimonialPage(page) {
            testimonialPageCount = getTestimonialPageCount();

            activeTestimonialPage = Math.max(
                0,
                Math.min(testimonialPageCount - 1, page)
            );

            showTestimonialPage(activeTestimonialPage);
            renderTestimonialPagination();
        }

        function paginationItems(current, total) {
            if (total <= 5) {
                return Array.from({ length: total }, (_, i) => i);
            }

            if (current <= 1) {
                return [0, 1, 2, 'ellipsis', total - 1];
            }

            if (current >= total - 2) {
                return [0, 'ellipsis', total - 3, total - 2, total - 1];
            }

            return [0, 'ellipsis', current, total - 1];
        }

        function renderTestimonialPagination() {
            testimonialPageCount = getTestimonialPageCount();

            activeTestimonialPage = Math.min(
                activeTestimonialPage,
                testimonialPageCount - 1
            );

            testimonialPagination.innerHTML = '';

            if (testimonialPageCount <= 1) return;

            const wrap = document.createElement('div');

            wrap.className = 'flex items-center justify-center gap-1.5';

            const makeButton = (
                label,
                page,
                disabled = false,
                active = false,
                aria = ''
            ) => {
                const button = document.createElement('button');

                button.type = 'button';
                button.textContent = label;
                button.disabled = disabled;

                if (aria) {
                    button.setAttribute('aria-label', aria);
                }

                if (active) {
                    button.setAttribute('aria-current', 'page');
                }

                button.className =
                    'min-w-9 h-9 rounded-lg border border-[#e8e9eb] px-2 text-[13px] transition ' +
                    (active
                        ? 'border-[#132133] bg-[#132133] font-semibold text-white'
                        : 'bg-white text-[#132133] hover:bg-[#fff7df]') +
                    (disabled ? ' cursor-not-allowed opacity-40' : '');

                if (!disabled && page !== null) {
                    button.addEventListener(
                        'click',
                        () => goToTestimonialPage(page)
                    );
                }

                return button;
            };

            wrap.appendChild(
                makeButton(
                    '‹',
                    activeTestimonialPage - 1,
                    activeTestimonialPage === 0,
                    false,
                    'Halaman sebelumnya'
                )
            );

            paginationItems(
                activeTestimonialPage,
                testimonialPageCount
            ).forEach(item => {
                if (item === 'ellipsis') {
                    const ellipsis = document.createElement('span');

                    ellipsis.className =
                        'flex h-9 min-w-9 items-center justify-center text-sm text-[#737d89]';

                    ellipsis.textContent = '…';

                    wrap.appendChild(ellipsis);
                } else {
                    wrap.appendChild(
                        makeButton(
                            String(item + 1),
                            item,
                            false,
                            item === activeTestimonialPage,
                            'Testimoni halaman ' + (item + 1)
                        )
                    );
                }
            });

            wrap.appendChild(
                makeButton(
                    '›',
                    activeTestimonialPage + 1,
                    activeTestimonialPage >= testimonialPageCount - 1,
                    false,
                    'Halaman berikutnya'
                )
            );

            testimonialPagination.appendChild(wrap);
        }

        renderTestimonialPagination();
        showTestimonialPage(activeTestimonialPage);

        window.addEventListener('resize', function () {
            testimonialPageCount = getTestimonialPageCount();

            activeTestimonialPage = Math.min(
                activeTestimonialPage,
                testimonialPageCount - 1
            );

            showTestimonialPage(activeTestimonialPage);
            renderTestimonialPagination();
        });
    </script>

</body>
</html>