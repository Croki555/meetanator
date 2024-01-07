<x-app-layout title="Просмотр встречи">
    @section('main')
        <div class="vh-100">
            <div class="container-xxl h-100 py-5">
                <h1 class="display-3 fw-semibold text-center mb-5">Информация о встрече</h1>
                <div class="mb-4">
                    <h2 class=" display-5 fw-semibold">Название: <span class="fs-2 text-white-50">«Тестовое название»</span></h2>
                    <div class="mb-3">
                        <h2 class="mb-2 display-5 fw-semibold">Описание:</h2>
                        <p class="lead mb-0" style="text-align: justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet eveniet officiis suscipit
                            unde. Culpa, illo, vel. Atque consequatur deserunt esse explicabo fuga libero nobis placeat,
                            quasi repellendus reprehenderit! Atque!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi facere molestiae quod
                            tempora ullam. Accusantium doloremque est expedita, facere hic in laborum nostrum officiis
                            quasi, quod rem tempora totam unde.
                        </p>
                    </div>
                    <div>
                        <h2 class=" display-5 fw-semibold">Лидер: <span class="text-info">Павел</span></h2>
                    </div>
                </div>
                <hr>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <form action="#" method="post">
                    <h2 class=" display-5 fw-semibold">Авторизация</h2>
                    <div class="mb-3 alert alert-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                        </svg>
                        Участник может повторно получить доступ к управлению встречи, если ранее указал и никнейм, и пароль
                    </div>
                    <div class="input-group input-group-lg">
                        <span for="login" class="input-group-text fs-5">Логин | Никнейм</span>
                        <input type="text" class="form-control" placeholder="Pavel21" name="login" required>
                        <span for="password" class="input-group-text fs-5">Пароль (не обязательно, но желательно)</span>
                        <input type="password" class="form-control" name="password">
                        <button type="submit" class="btn btn-success">Далее</button>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Tooltip on top">Tooltip on top</button>
                </form>



            </div>
        </div>
    @endsection
</x-app-layout>
