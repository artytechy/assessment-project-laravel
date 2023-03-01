<template>
    <BaseCard class="mt-3">
        <template v-slot:title>
            <span class="d-flex justify-content-between">
                <span class="mt-1">Dashboard</span>
                <button class="btn btn-primary btn-sm" @click="data.showModal = true">Import CSV</button>
            </span>
        </template>

        <form @submit.prevent="searchItem">
            <div class="input-group mb-3">
                <input v-model.trim="search.search" type="text" class="form-control" placeholder="Search">
                <button class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>

        <BaseTable
            :labels="labels">
            <TableContent
                v-for="list in user_lists.data" :key="list.id"
                :list="list" />
            <td v-if="Object.keys(user_lists.data).length === 0" colspan="5" class="text-center">No data</td>
        </BaseTable>

        <div class="d-flex justify-content-center">
            <Pagination :links="user_lists.links" />
        </div>

        <BaseModal title="Import CSV" :show="data.showModal" @close="closeModal">
            <form @submit.prevent="importData">
                <div class="row">
                    <label for="">Choose CSV Datasheet
                        <input @input="addFile" type="file" class="form-control">
                    </label>
                </div>
                <button class="btn btn-primary mt-2">Upload</button>
            </form>
        </BaseModal>
    </BaseCard>
</template>
<script setup>
import {useForm} from "@inertiajs/vue3"
import {reactive} from "vue"
import BaseCard from '@/Components/UI/BaseCard.vue'
import BaseTable from '@/Components/UI/BaseTable.vue'
import BaseModal from '@/Components/UI/BaseModal.vue'
import TableContent from '@/Pages/Dashboard/Components/TableContent.vue'
import Pagination from '@/Components/UI/Pagination.vue'

const props = defineProps({
    user_lists: Object,
    search: Object
})

const data = reactive({
    showModal: false
})

const form = useForm({
    file: null
})

const search = useForm({
    search: props.search.search ?? null
})

const closeModal = () => {
    data.showModal = false
}

const importData = () => form.post(route('file-import'), {
    onSuccess: () => form.reset(),
    preserveState: false,
    preserveScroll: true
})

const searchItem = () => search.get(route('dashboard.index'), {preserveState: true, preserveScroll: true})

const addFile = (e) => {
    form.file = e.target.files[0]
}

const labels = [
    {text: 'First Name', field: 'first_name'},
    {text: 'Last Name', field: 'last_name'},
    {text: 'Company', field: 'company'},
    {text: 'Chapter Name', field: 'chapter_name'},
    {text: 'View', field: 'view'},
]
</script>
