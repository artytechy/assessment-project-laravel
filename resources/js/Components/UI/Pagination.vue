<template>
    <ul class="pagination mt-3">
        <li v-for="(link, index) in links" :key="index" class="page-item" :class="{'active' : link.active}">
            <Link
                v-html="link.label"
                :href="link.url"
                class="page-link" />
        </li>
    </ul>
</template>

<script setup>
import {Link} from "@inertiajs/vue3"

defineProps({
    links: Array
})
</script>
