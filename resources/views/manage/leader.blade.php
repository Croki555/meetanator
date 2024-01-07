<x-app-layout title="Управление встречей лидером">
    @section('main')
        <div class="vh-100">
            <div class="container-xxl h-100 py-5">
                <h1 class="display-3 fw-semibold text-center mb-5">Управление встречей лидером</h1>
                <div class="accordion col mb-4" id="secretLink">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="secretLink">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#secretLink1" aria-expanded="false" aria-controls="secretLink1">
                                Секретная ссылка
                            </button>
                        </h2>
                        <div id="secretLink1" class="accordion-collapse collapse" aria-labelledby="secretLink"
                             data-bs-parent="#secretLink">
                            <div class="accordion-body text-break">
                                {{ $secretLink }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <h3 class="mb-3">Приглашение</h3>
                    <div class="accordion" id="inviteLinkMonthFirst">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="inviteLinkMonthFirst">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#inviteLinkMonthFirst-1" aria-expanded="false"
                                        aria-controls="inviteLinkMonthFirst-1">
                                    Ссылка
                                </button>
                            </h2>
                            <div id="inviteLinkMonthFirst-1" class="accordion-collapse collapse"
                                 aria-labelledby="inviteLink"
                                 data-bs-parent="#inviteLink">
                                <div class="accordion-body text-break">
                                    http://meeting/250d61d84473797d1178d4ccd382bc073c899f66
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="mb-3" action="#" method="post">
                    @csrf
                    <div class="alert alert-warning fw-bold" role="alert">
                        Через пробел, указывать адреса электронный адресов!!!
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text fw-bold">Адреса</span>
                            <input class="form-control" type="email" placeholder="example@mail.ru example2@gmail.com valera.grey2@mail.ru">
                            <style>
                                .form-control::placeholder { color: gray;}
                            </style>
                            <button type="submit" class="btn btn-sm btn-success">Отправить приглашение</button>
                        </div>
                    </div>
                </form>
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <h2 class="mb-3 display-4 fw-semibold">Январь</h2>
                        <div>
                            <div class="table-responsive mb-4">
                                <table class="table table-sm table-dark text-nowrap text-center">
                                    <thead>
                                    <tr>
                                        <th>День</th>
                                        <th>Интервал</th>
                                        <th>Участник</th>
                                        <th>Придёт</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-active">
                                        <td>10</td>
                                        <td>16:00 - 18:00</td>
                                        <td>Павел</td>
                                        <td>15:25 - 17:22</td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>22</td>
                                        <td>11:00 - 16:00</td>
                                        <td>Андрей</td>
                                        <td>16:20 - 18:00</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>8:00 - 18:00</td>
                                        <td>Алексей</td>
                                        <td>нет</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>9:00 - 16:25</td>
                                        <td>Дима</td>
                                        <td>нет</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <form action="#" method="post">
                                                @csrf
                                                <button class="btn btn-sm btn-danger w-100">Удалить всю информацию о пользователях</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Управление <span class="text-secondary fs-5">(январь)</span></h3>
                            <div class="table-responsive mb-4">
                                <table class="table table-sm table-dark text-nowrap text-center mb-3">
                                    <thead>
                                    <tr>
                                        <th>День</th>
                                        <th>Интервал лидера</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>28</td>
                                        <td>
                                            <form action="#" method="post"
                                                  class="d-flex align-items-center justify-content-center gap-2">
                                                @csrf
                                                <div>
                                                    <div class="input-group input-group-sm" style="max-width: 120px">
                                                        <input type="time" min="09:00" class="form-control"
                                                               id="startTimeMonth1" value="09:00"
                                                               name="startTimeMonth1" required>
                                                    </div>
                                                </div>
                                                -
                                                <div>
                                                    <div class="input-group input-group-sm" style="max-width: 120px">
                                                        <input type="time" min="09:10" max="18:00" class="form-control"
                                                               id="endTimeMonth1" value="18:00"
                                                               name="endTimeMonth1" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-info">Изменить</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="#" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Удалить встечу</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="mb-3 display-4 fw-semibold">Февраль</h2>
                        <div>
                            <div class="table-responsive mb-4">
                                <table class="table table-sm table-dark text-nowrap text-center">
                                    <thead>
                                    <tr>
                                        <th>День</th>
                                        <th>Интервал</th>
                                        <th>Участник</th>
                                        <th>Придёт</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-active">
                                        <td>10</td>
                                        <td>16:00 - 18:00</td>
                                        <td>Павел</td>
                                        <td>15:25 - 17:22</td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>22</td>
                                        <td>11:00 - 16:00</td>
                                        <td>Андрей</td>
                                        <td>16:20 - 18:00</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>8:00 - 18:00</td>
                                        <td>Алексей</td>
                                        <td>нет</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>9:00 - 16:25</td>
                                        <td>Дима</td>
                                        <td>нет</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <form action="#" method="post">
                                                @csrf
                                                <button class="btn btn-sm btn-danger w-100">Удалить всю информацию о пользователях</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Управление <span class="text-secondary fs-5">(февраль)</span></h3>
                            <div class="table-responsive mb-4">
                                <table class="table table-sm table-dark text-nowrap text-center mb-3">
                                    <thead>
                                    <tr>
                                        <th>День</th>
                                        <th>Интервал лидера</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>28</td>
                                        <td>
                                            <form action="#" method="post"
                                                  class="d-flex align-items-center justify-content-center gap-2">
                                                @csrf
                                                <div>
                                                    <div class="input-group input-group-sm" style="max-width: 120px">
                                                        <input type="time" min="09:00" class="form-control"
                                                               id="startTimeMonth1" value="09:00"
                                                               name="startTimeMonth1" required>
                                                    </div>
                                                </div>
                                                -
                                                <div>
                                                    <div class="input-group input-group-sm" style="max-width: 120px">
                                                        <input type="time" min="09:10" max="18:00" class="form-control"
                                                               id="endTimeMonth1" value="18:00"
                                                               name="endTimeMonth1" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-info">Изменить</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="#" method="post">
                                                @csrf
                                                <button class="btn btn-sm btn-danger">Удалить встечу</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .accordion .accordion-item .accordion-header .accordion-button {
                background: grey !important;
            }
        </style>
    @endsection
</x-app-layout>
