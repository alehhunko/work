<template>
    <div>
        <!-- Pricing section-->
        <section class="bg-white pt-5">
            <div class="container px-5 my-5">
                <div class="text-left mb-5">
                    <h1 class="fw-bolder">МОДЕЛИ В НАЛИЧИИ</h1>
                </div>
                <div class="row d-flex justify-content-around">
                    <!-- Model car-->

                    <div class="card py-4 col-3" style="width: 16rem;" v-for="(item, i) in items">
                        <h5 class="card-title "><strong>Model {{ item.name }}</strong></h5>
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
                        <img class="card-img-top" :src="item.foto" alt="Card image cap">
                        <p class="card-text mt-2" style="font-size: small">2.7 дизель, Common rail, 150 л.с., МКПП,
                            Задний
                            привод</p>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn rounded-5 mb-2 btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Получить спец. цену</button>
                            <button type="button" class="btn rounded-5 mb-2 btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Спец. условия по
                                лизингу</button>
                            <button type="button" class="btn rounded-5 btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Подобрать автомобиль</button>
                        </div>
                    </div>


                </div>
            </div>
            <BodyQuestion></BodyQuestion>
        </section>
        <ModalCall></ModalCall>
    </div>
</template>

<script>

import ModalCall from './ModalCall.vue';
import BodyQuestion from './BodyQuestion.vue';
import fotocar from '/resources/img/car.png'
import fotocar1 from '/resources/img/car1.png'
import fotocar2 from '/resources/img/car2.png'
import fotocar3 from '/resources/img/car3.png'
export default {
    data() {
        return {
            isActive: false,

            items: [
                { name: 'WHT', foto: fotocar, },
                { name: 'BLK', foto: fotocar1, },
                { name: 'BRN', foto: fotocar2, },
                { name: 'GRN', foto: fotocar3, },
            ]
        }
    },
    components: {
        ModalCall,
        BodyQuestion,
    },

    methods: {
        selectItem() {
            this.isActive = true;
        },
    },
}
</script>
