<template>
    <div>
        <button class="btn  rounded-5" v-bind:class="{ 'btn-danger': isActive }" @click="isActive = true" type="button" >
            {{ isActive ? 'ON' : 'OFF' }}</button>

        <Modal></Modal>
    </div>
</template>

<script>
import Modal from './Modal.vue'
export default {

    data() {
        return {
            isActive: false,
        }
    },

    methods: {
        toggle() {
            this.isActive = this.isActive ? false : true;
        },
    },

    components: {
        Modal
    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
