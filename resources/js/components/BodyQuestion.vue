<template>
    <div>
        <!-- Pricing section-->
        <section class="bg-white pt-5 border-bottom">
            <!-- Contact section-->
            <section class="bg-white pt-5">
                <div class="container pt-5 bg-light" style="width: 1300px; border-radius: 50px 50px 0px 0px;">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Есть вопросы?</h1>
                        <p class="lead mb-0">Мы перезвоним вам и ответим на любой вопрос</p>
                    </div>
                    <div class="row">
                        <!-- Name input-->
                        <div class="col mb-3">
                            <input class="form-control rounded-5" v-model="name" id="name" type="text"
                                placeholder="Ваше имя" />
                        </div>
                        <!-- Phone number input-->
                        <div class="col mb-3">
                            <input class="form-control rounded-5" v-model="phone" id="phone" type="tel"
                                    placeholder="+7 (___) ___-__-__" />
                        </div>
                        <!-- Submit Button-->
                        <div class="col d-grid mb-3">
                            <button type="button" class="btn rounded-5" @click.prevent="addClient"
                                :class="{ 'btn-success': status == 201, 'btn-danger': status !== 201 }">
                                {{ status == 201 ? 'Отправлено' : ' Обратный звонок' }} </button>
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
            foto: fotocar,
            name: null,
            phone: null,
            status: null,
        }
    },

    methods: {
        addClient() {
            axios
                .post('api/client', { name: this.name, phone: this.phone })
                .then(res => { this.status = res.status })
        }
    },
}
</script>
