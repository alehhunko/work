<template>
    <div>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">
                    <h2>Logo</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-flex justify-content-center">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-3"><a class="nav-link" style="color: white" href="#!">Пункт меню
                                1</a>
                        </li>
                        <li class="nav-item mx-3"><a class="nav-link" style="color: white" href="#!">Пункт меню
                                2</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" style="color: white" href="#!">Пункт меню 3</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                    :class="{ 'btn-danger': !hover, 'border border-dark': hover }" @mouseover="hover = true"
                    @mouseleave="hover = false">Обратный
                    звонок</button>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="my-5">
                            <h1 class="display-4 fw-bolder text-white mb-2">ВСЕ ВИДЫ РАБОТ. </h1>
                            <p class="text-white-50 mb-6" style="font-size: xx-large">ПРЕМИАЛЬНОЕ КАЧЕСТВО ПО
                                ДОСТУПНЫМ ЦЕНАМ.</p>
                            <div style="width: 400px; margin-top: 100px;">
                                <!-- Phone number input-->
                                <div class="mb-3" s>
                                    <input class="form-control rounded-5" id="phone" type="tel"
                                        data-sb-validations="required" placeholder="+7 (___) ___-__-__" />
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number
                                        is
                                        required.
                                    </div>
                                </div>
                                <!-- Submit Button-->
                                <div class="mb-3">
                                    <button style="width: 100%;" type="button" class="btn rounded-5" data-bs-toggle="modal"
                                        data-bs-target="#ModalTwo" @click="isActive = true"
                                        :class="{ 'btn-success': isActive, 'btn-danger': !isActive }">
                                        {{ isActive ? 'Отправлено' : ' Обратный звонок' }} </button>
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
            hover: false,
        }
    },

    methods: {
        toggle() {
            this.isActive = this.isActive ? false : true;
        },
    },
}
</script>
