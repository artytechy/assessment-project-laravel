<template>
    <Menu :user="user" />
    <div class="container">
        <slot />
    </div>
</template>
<script setup>
import {computed, watch} from 'vue'
import {usePage} from '@inertiajs/vue3'
import {useToast} from 'vue-toast-notification'
import 'vue-toast-notification/dist/theme-sugar.css'
import Menu from '@/Layouts/Components/Menu.vue'

const page = usePage()
const user = computed(() => page.props.user)
const $toast = useToast()

watch(() => usePage().props.flash, flash => {
    const options = {position: 'top'}
    if (flash.success) {
        $toast.success(flash.success, options);
    }
}, {immediate: true})
</script>
