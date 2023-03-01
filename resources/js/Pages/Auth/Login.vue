<template>
    <BaseCard>
        <template v-slot:title>Login</template>
        <form @submit.prevent="login">
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
            <button class="btn btn-primary w-100">Login</button>
        </form>
        <div class="text-left text-muted mt-3">
            Don't have account yet? <Link :href="route('register')">Register</Link>
        </div>
    </BaseCard>
</template>

<script setup>
import {useForm, Link} from "@inertiajs/vue3"
import BaseCard from '@/Components/UI/BaseCard.vue'
import BaseInput from '@/Components/UI/BaseInput.vue'

const form = useForm({
    email: null,
    password: null
})

const login = () => form.post(route('login.store'))
</script>

<script>
import AuthLayout from '@/Layouts/AuthLayout.vue'

export default {
    layout: AuthLayout
}
</script>

