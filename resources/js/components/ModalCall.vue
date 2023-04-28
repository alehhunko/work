<template>
    <div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="d-flex flex-column ">
                        <h2 class="p-2 d-flex justify-content-center">Заголовок формы</h2>
                        <h5 class="p-2 d-flex justify-content-center">Мы перезвоним вам и ответим на любой вопрос</h5>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-column">
                            <div class="p-2 mb-3">
                                <input class="form-control rounded-5" v-model="name" id="name" type="text"
                                    placeholder="Ваше имя" />
                            </div>
                            <!-- Phone number input-->
                            <div class="p-2 mb-5">
                                <input class="form-control rounded-5" v-model="phone" id="phone" type="tel"
                                    placeholder="+7 (___) ___-__-__" />
                            </div>
                            <!-- Submit Button-->
                            <div class="p-2 d-grid mb-3">
                                <button @click.prevent="addClient" class="btn btn-danger rounded-5" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-dismiss="modal">
                                    Обратный
                                    звонок </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p style="font-size: x-small">Нажимая кнопку я подтверждаю свое ознакомление с порядком обработки
                            персональных данных со
                            стороны КОМПАНИИ и даю свободное и осознанное согласие на их обработку, на получение
                            информации по каналам связи, в том числе в рекламных целях. Подробно тут</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="d-flex flex-column">
                        <h2 class="p-2 d-flex justify-content-center">{{ status == 201 ? 'Ваша Заявка успешно отправлена' :
                            'Ошибка при отправке' }}</h2>
                        <h5 class="p-2 d-flex justify-content-center">{{ status == 201 ? 'менеджер свяжется с Вами в ближайшее время' : 'попробуйте отправить заявку заново' }}</h5>
                        <a href="/" class="p-2 d-flex justify-content-center" style="text-decoration: none;">
                            <button type="button" class=" btn btn-danger rounded-5" data-bs-dismiss="modal">{{ status == 201 ?
                                'На главную' : 'Повторить' }}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            name: null,
            phone: null,
            status: null,
        }
    },

    mounted() {
        //     axios
        //   .get('api/client')
        //   .then(response => console.log(response))
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
