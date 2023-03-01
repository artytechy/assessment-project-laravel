<template>
    <BaseCard>
        <template v-slot:title>Register</template>
        <form @submit.prevent="register">
            <BaseInput
                v-model:value="form.name"
                label="Name"
                :error="form.errors.name"
                :is-invalid-class="form.errors.name ? 'is-invalid' : ''" />
            <BaseInput
                v-model:value="form.email"
                label="Email"
                type="email"
                :error="form.errors.email"
                :is-invalid-class="form.errors.email ? 'is-invalid' : ''" />
            <BaseInput
                v-model:value="form.password"
                label="Password"
                type="password"
                :error="form.errors.password"
                :is-invalid-class="form.errors.password ? 'is-invalid' : ''" />
            <BaseInput
                v-model:value="form.password_confirmation"
                label="Confirm password"
                type="password"
                :error="form.errors.password_confirmation"
                :is-invalid-class="form.errors.password_confirmation ? 'is-invalid' : ''" />
            <button class="btn btn-primary w-100">Register</button>
        </form>
        <div class="text-left text-muted mt-3">
            Already have account? <Link :href="route('login')">Login</Link>
        </div>
    </BaseCard>
</template>

<script setup>
import {useForm, Link} from "@inertiajs/vue3"
import BaseCard from '@/Components/UI/BaseCard.vue'
import BaseInput from '@/Components/UI/BaseInput.vue'

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
})

const register = () => form.post(route('register.store'))
</script>

<script>
import AuthLayout from '@/Layouts/AuthLayout.vue'

export default {
    layout: AuthLayout
}
</script>

