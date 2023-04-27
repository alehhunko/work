<template>
    <div>
        <!-- Pricing section-->
        <section class="bg-white pt-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-left mb-5">
                    <h1 class="fw-bolder">МОДЕЛИ В НАЛИЧИИ</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Model car-->
                    
                    <div class="card py-4 col-3" style="width: 19rem;">
                        <h5 class="card-title "><strong>Model WHT</strong></h5>
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <i class="bi bi-truck" style="color:red"></i>
                                <strong style="font-size: x-small">10 А/М В НАЛИЧИИ</strong>
                            </div>
                            <div>
                                <i class="bi bi-stopwatch" style="color:red"></i>
                                <strong style="font-size: x-small">ЛИЗИНГ А/М</strong>
                            </div>
                        </div>
                        <img class="card-img-top" :src="foto" alt="Card image cap">
                        <p class="card-text mt-2" style="font-size: small">2.7 дизель, Common rail, 150 л.с., МКПП,
                            Задний
                            привод</p>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-danger': !hoverone, 'border border-dark': hoverone }"
                                @mouseover="hoverone = true" @mouseleave="hoverone = false">Получить спец. цену</button>
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovertwo, 'btn-danger': hovertwo }"
                                @mouseover="hovertwo = true" @mouseleave="hovertwo = false">Спец. условия по
                                лизингу</button>
                            <button type="button" class="btn rounded-5" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovethree, 'btn-danger': hovethree }"
                                @mouseover="hovethree = true" @mouseleave="hovethree = false">Подобрать автомобиль</button>
                        </div>
                    </div>

                    <div class="card py-4 col-3" style="width: 19rem;">
                        <h5 class="card-title "><strong>Model WHT</strong></h5>
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <i class="bi bi-truck" style="color:red"></i>
                                <strong style="font-size: x-small">10 А/М В НАЛИЧИИ</strong>
                            </div>
                            <div>
                                <i class="bi bi-stopwatch" style="color:red"></i>
                                <strong style="font-size: x-small">ЛИЗИНГ А/М</strong>
                            </div>
                        </div>
                        <img class="card-img-top" :src="foto" alt="Card image cap">
                        <p class="card-text mt-2" style="font-size: small">2.7 дизель, Common rail, 150 л.с., МКПП,
                            Задний
                            привод</p>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-danger': !hoverone, 'border border-dark': hoverone }"
                                @mouseover="hoverone = true" @mouseleave="hoverone = false">Получить спец. цену</button>
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovertwo, 'btn-danger': hovertwo }"
                                @mouseover="hovertwo = true" @mouseleave="hovertwo = false">Спец. условия по
                                лизингу</button>
                            <button type="button" class="btn rounded-5" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovethree, 'btn-danger': hovethree }"
                                @mouseover="hovethree = true" @mouseleave="hovethree = false">Подобрать автомобиль</button>
                        </div>
                    </div>

                    <div class="card py-4 col-3" style="width: 19rem;">
                        <h5 class="card-title "><strong>Model WHT</strong></h5>
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <i class="bi bi-truck" style="color:red"></i>
                                <strong style="font-size: x-small">10 А/М В НАЛИЧИИ</strong>
                            </div>
                            <div>
                                <i class="bi bi-stopwatch" style="color:red"></i>
                                <strong style="font-size: x-small">ЛИЗИНГ А/М</strong>
                            </div>
                        </div>
                        <img class="card-img-top" :src="foto" alt="Card image cap">
                        <p class="card-text mt-2" style="font-size: small">2.7 дизель, Common rail, 150 л.с., МКПП,
                            Задний
                            привод</p>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-danger': !hoverone, 'border border-dark': hoverone }"
                                @mouseover="hoverone = true" @mouseleave="hoverone = false">Получить спец. цену</button>
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovertwo, 'btn-danger': hovertwo }"
                                @mouseover="hovertwo = true" @mouseleave="hovertwo = false">Спец. условия по
                                лизингу</button>
                            <button type="button" class="btn rounded-5" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovethree, 'btn-danger': hovethree }"
                                @mouseover="hovethree = true" @mouseleave="hovethree = false">Подобрать автомобиль</button>
                        </div>
                    </div>

                    <div class="card py-4 col-3" style="width: 19rem;">
                        <h5 class="card-title "><strong>Model WHT</strong></h5>
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <i class="bi bi-truck" style="color:red"></i>
                                <strong style="font-size: x-small">10 А/М В НАЛИЧИИ</strong>
                            </div>
                            <div>
                                <i class="bi bi-stopwatch" style="color:red"></i>
                                <strong style="font-size: x-small">ЛИЗИНГ А/М</strong>
                            </div>
                        </div>
                        <img class="card-img-top" :src="foto" alt="Card image cap">
                        <p class="card-text mt-2" style="font-size: small">2.7 дизель, Common rail, 150 л.с., МКПП,
                            Задний
                            привод</p>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-danger': !hoverone, 'border border-dark': hoverone }"
                                @mouseover="hoverone = true" @mouseleave="hoverone = false">Получить спец. цену</button>
                            <button type="button" class="btn rounded-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovertwo, 'btn-danger': hovertwo }"
                                @mouseover="hovertwo = true" @mouseleave="hovertwo = false">Спец. условия по
                                лизингу</button>
                            <button type="button" class="btn rounded-5" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                :class="{ 'btn-outline-dark': !hovethree, 'btn-danger': hovethree }"
                                @mouseover="hovethree = true" @mouseleave="hovethree = false">Подобрать автомобиль</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Contact section-->
            <section class="bg-white pt-5">
                <div class="container pt-5 bg-light" style="width: 1300px; border-radius: 50px 50px 0px 0px;">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Есть вопросы?</h1>
                        <p class="lead mb-0">Мы перезвоним вам и ответим на любой вопрос</p>
                    </div>
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="row">
                            <div class="col form-floating mb-3">
                                <input class="form-control rounded-5" id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required" />
                                <label for="name" class="ms-3">Ваше имя</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                </div>
                            </div>
                            <!-- Phone number input-->
                            <div class="col form-floating mb-3">
                                <input class="form-control rounded-5" id="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" />
                                <label for="phone" class="ms-3">+7 (___) ___-__-__</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                    required.
                                </div>
                            </div>
                            <!-- Submit Button-->
                            <div class="col d-grid mb-3">
                                <button type="button" class="btn rounded-5" data-bs-toggle="modal"
                                    data-bs-target="#ModalTwo" @click="isActive = true"
                                    :class="{ 'btn-success': isActive, 'btn-danger': !isActive }">
                                    {{ isActive ? 'Отправлено' : ' Обратный звонок' }} </button>
                            </div>
                            <div class="row">
                                <p class="text-center my-5 text-secondary">Нажимая кнопку я подтверждаю свое
                                    ознакомление с
                                    порядком обработки персональных данных со
                                    стороны КОМПАНИИ и даю свободное и осознанное согласие на их обработку, на получение
                                    информации
                                    по каналам связи, в том числе в рекламных целях. <a href="">Подробно тут</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </section>

    </div>
</template>

<script>
import fotocar from '/resources/img/car.png'
export default {
    data() {
        return {
            isActive: false,
            hoverone: false,
            hovertwo: false,
            hovethree: false,
            foto: fotocar,
        }
    },

    methods: {
        toggle() {
            this.isActive = this.isActive ? false : true;
        },
    },
}
</script>
