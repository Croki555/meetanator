<x-app-layout title="Главная">
    @section('headScripts')
        @vite('resources/js/datepicker.js')
    @endsection
    <x-slot name="header"></x-slot>
    @section('main')
            <div class="d-flex vh-100 text-center">
                <div class="cover-container d-flex w-100 h-100 py-5 px-3 mx-auto align-items-center">
                    <div>
                        <h1 class="display-2 fw-semibold">Встречайте моменты <span class="text-info">вместе!</span></h1>
                        <p class="lead fs-3 text-white-50">Meetanator - бесплатный сервис, в котором вы можете максимально легко создать и спланировать встречу</p>
                        <button type="button" class="btn btn-lg btn-light fw-bold border-white bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Создать встречу
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content text-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Создание встречи</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url()->current() }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <div class="row row-cols-1 row-cols-lg-2 mb-4">
                                                <div class="col">
                                                    <div class="m-auto" style="max-width: 450px">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                                                   placeholder="#" value="{{ old('title') }}" name="title">
                                                            <label for="title">Название встречи</label>
                                                            @error('title')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      id="description" name="description"
                                      placeholder="#">{{ old('description') }}</textarea>
                                                            <label for="description">Описание встречи</label>
                                                            @error('description')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control @error('login') is-invalid @enderror" id="login"
                                                                   placeholder="#" value="{{ old('login') }}" name="login">
                                                            <label for="login">Логин | Никнейм</label>
                                                            @error('login')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center">
                                                    <div class="row row-cols-1 row-cols-sm-2">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label fs-3" for="month1">{{ $nameMonth[$month] }}</label>
                                                                <input class="form-control" id="month1" name="month"
                                                                       placeholder="{{ $nameMonth[$month] }}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">C</span>
                                                                    <input type="time" min="09:00" class="form-control" id="startTimeMonth1" value="09:00"
                                                                           name="startTimeMonth1" required>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">До</span>
                                                                    <input type="time" min="09:10" max="18:00" class="form-control" id="endTimeMonth1" value="18:00"
                                                                           name="endTimeMonth1" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label fs-3" for="month2">{{ $nameMonth[$nextMonth] }}</label>
                                                                <input class="form-control" id="month2" name="month2"
                                                                       placeholder="{{ $nameMonth[$nextMonth] }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">C</span>
                                                                    <input type="time" min="09:00" class="form-control" id="startTimeMonth2" value="09:00"
                                                                           name="startTimeMonth2" required>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">До</span>
                                                                    <input type="time" min="09:10" max="18:00" class="form-control" id="endTimeMonth2" value="18:00"
                                                                           name="endTimeMonth2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="form-check mb-3 p-0">
                                                    <label class="form-check-label" for="agree">
                                                        Cогласие с политикой конфиденциальности
                                                    </label>
                                                    <input class="form-check-input float-none mx-0" type="checkbox" value="" id="agree"
                                                           checked>
                                                </div>
                                                <button class="btn btn-lg btn-success" style="max-width: 200px" type="submit">Создать</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .air-datepicker-global-container * {
                                z-index: 1056;
                            }
                        </style>
                    </div>
                </div>
            </div>
    @endsection
    @section('about-us')
        <section id="about-us" class="vh-100">
                <div class="container-xl d-flex w-100 h-100 py-5 px-3 mx-auto align-items-center justify-content-center">
                    <div>
                        <h2 class="text-center display-1 mb-5 fw-semibold">О нас</h2>
                        <div class="row row-cols-3">
                            <div class="col text-center">
                                <span class="d-block text-info display-2">&gt;4 млн</span>
                                <span class="text-white-50 fs-3">пользователей</span>
                            </div>
                            <div class="col text-center">
                                <span class="d-block text-info display-2">146%</span>
                                <span class="text-white-50 fs-3">удовлетворённых пользователей</span>
                            </div>
                            <div class="col text-center">
                                <span class="d-block text-info display-2">100млн</span>
                                <span class="text-white-50 fs-3">рублей привлечённых инвестиций</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endsection
    @section('about-system')
        <section id="about-system" class="vh-100">
            <div class="container-xl d-flex w-100 h-100 py-5 px-3 mx-auto align-items-center justify-content-center" id="video-container">
                <video id="my-video" controls>
                    <source src="{{ route('home') }}/video/about-system.mp4" type="video/mp4">
                </video>
            </div>
        </section>
        <script>
            const videoContainer = document.getElementById('video-container');
            const video = document.getElementById('my-video');
            function isElementInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= window.innerHeight &&
                    rect.bottom >= 0
                );
            }
            function checkVideoPlayback() {
                if (isElementInViewport(videoContainer)) {
                    video.play();
                } else {
                    video.pause();
                }
            }

            window.addEventListener('scroll', checkVideoPlayback);
            checkVideoPlayback();
        </script>
    @endsection
    <x-slot name="footer"></x-slot>
</x-app-layout>
