<template>
    <div>
        <button class="btn btn-danger rounded-5" v-bind:class="{ active: isActive }" @click="isActive = !isActive" type="button" >
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
