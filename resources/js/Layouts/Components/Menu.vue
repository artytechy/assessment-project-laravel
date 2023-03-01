<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <Link class="navbar-brand" :href="route('dashboard.index')">Laravel</Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <Link class="btn btn-danger" :href="route('logout')" method="delete" as="button">Logout</Link>
        </div>
    </nav>
</template>

<script setup>
import {Link} from "@inertiajs/vue3"

defineProps({
    user: Object
})
</script>
