<template>
    <table class="table table-responsive table-hover w-50 mb-0">
        <tbody>
            <tr>
                <td class="w-124">First Name</td>
                <td class="w-432">{{ list.first_name ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Last Name</td>
                <td class="w-432">{{ list.last_name ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Company</td>
                <td class="w-432">{{ list.company_name ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Profession</td>
                <td class="w-432">{{ list.profession ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Chapter Name</td>
                <td class="w-432">{{ list.chapter_name ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Phone Number</td>
                <td class="w-432">{{ list.phone_number ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Email</td>
                <td class="w-432">{{ list.email ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Website</td>
                <td class="w-432">{{ list.website ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Address</td>
                <td class="w-432">{{ list.address ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Postcode</td>
                <td class="w-432">{{ list.postcode ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Join Date</td>
                <td class="w-432">{{ list.join_date ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Renewal Date</td>
                <td class="w-432">{{ list.renewal_date ?? '-' }}</td>
            </tr>
            <tr>
                <td class="w-124">Sponsor</td>
                <td class="w-432">{{ list.sponsor ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
defineProps({
    list: Object
})
</script>

<style scoped>
tbody tr td:first-child {
    font-weight: 500 !important;
}
tbody tr td:not(:first-child) {
    font-weight: 400 !important;
}
</style>
