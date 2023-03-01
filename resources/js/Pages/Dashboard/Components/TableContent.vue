<template>
    <tr>
        <td>{{ list.first_name }}</td>
        <td>{{ list.last_name }}</td>
        <td>{{ list.company_name }}</td>
        <td>{{ list.chapter_name }}</td>
        <td><button @click="viewMore" class="btn btn-link">View More</button></td>
    </tr>
    <tr class="d-none" :id="'viewMore'+list.id">
        <th colspan="5">
            <TableViewMore :list="list" />
        </th>
    </tr>
</template>
<script setup>
import TableViewMore from '@/Pages/Dashboard/Components/TableViewMore.vue'

const props = defineProps({
    list: Object
})

const viewMore = () => {
    document.getElementById('viewMore'+props.list.id).classList.toggle('d-none')
}

</script>

<style scoped>
.w-124 {
    width: 124px !important;
}
.w-432 {
    width: 432px !important;
}
</style>
