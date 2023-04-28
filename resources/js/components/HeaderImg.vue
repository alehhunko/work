<template>
    <div>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">ВСЕ ВИДЫ РАБОТ. </h1>
                            <p class="text-white-50 mb-6" style="font-size: xx-large">ПРЕМИАЛЬНОЕ КАЧЕСТВО ПО
                                ДОСТУПНЫМ ЦЕНАМ.</p>
                            <div style="width: 400px; margin-top: 100px;">
                                <!-- Name input-->
                                <div class="col mb-3">
                                    <input class="form-control rounded-5" id="name" v-model="name" type="text"
                                        placeholder="Ваше имя" />
                                </div>
                                <!-- Phone number input-->
                                <div class="mb-3">
                                    <input class="form-control rounded-5" id="phone" v-model="phone" type="tel"
                                        placeholder="+7 (___) ___-__-__" />
                                </div>
                                <!-- Submit Button-->
                                <div class="mb-3">
                                    <button style="width: 100%;" type="button" class="btn rounded-5"
                                        @click.prevent="addClient"
                                        :class="{ 'btn-success': status == 201, 'btn-danger': status !== 201 }">
                                        {{ status == 201 ? 'Отправлено' : ' Обратный звонок' }} </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isActive: false,
            name: null,
            phone: null,
            status: null,
        }
    },

    mounted() {
        console.log(this.$refs.index.status)
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
