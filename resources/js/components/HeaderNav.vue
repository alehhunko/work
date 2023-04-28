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
                <button type="button" class="btn rounded-5 btn-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">Обратный
                    звонок</button>
            </div>
        </nav>
        <ModalCall></ModalCall>
    </div>
</template>

<script>
import ModalCall from './ModalCall.vue';
export default {
    data() {
        return {
            isActive: false,
        }
    },

    components: {
        ModalCall
    },

}
</script>
