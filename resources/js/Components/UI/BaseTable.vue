<template>
    <div class="card table table-responsive">
        <table class="table table-vcenter mb-0">
            <thead>
            <tr class="text-nowrap">
                <th v-for="(label, index) in labels" :key="index">
                    {{ label.text }}
                </th>
            </tr>
            </thead>
            <tbody>
                <slot />
            </tbody>
        </table>
    </div>
</template>

<script setup>
defineProps({
    labels: Object,
})
</script>
