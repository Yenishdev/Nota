
    <div class="container-xl py-4">
        <div class="fs-4 d-flex justify-content-between align-items-center">
            <div class="fw-semibold">
                Singers
            </div>
            {{--<a href="{{ route('categories.show', $musicAuthors['category']->slug) }}" class="link-secondary">--}}
                {{--<i class="bi-arrow-right-circle"></i>--}}
            {{--</a>--}}
        </div>
        <div class="splide py-4" role="group" id="splide-category-image">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($musicAuthors['singers'] as $singer)
                        <li class="splide__slide">
                            {{$singer['image']}}
                        </li>
                    @endforeach
                </ul>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    let splide = new Splide('#splide-category-image', {
                        type: 'loop',
                        autoplay: true,
                        arrows: false,
                        pagination: false,
                        interval: 3000,
                        gap: '1.5rem',
                        perMove: 1,
                        perPage: 4,
                        breakpoints: {
                            1399: {
                                perPage: 3,
                            },
                            991: {
                                perPage: 2,
                            },
                            575: {
                                perPage: 1,
                            },
                        }
                    });
                    splide.mount();
                });
            </script>
        </div>
    </div>
