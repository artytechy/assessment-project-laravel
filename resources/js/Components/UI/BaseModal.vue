<template>
    <teleport to="body">
        <div v-if="show" @click="close" class="backdrop"></div>
        <dialog v-if="show" open>
            <header class="d-flex justify-content-between align-middle">
                <slot name="header">
                    <p class="align-self-center">{{ title }}</p>
                </slot>
                <slot name="actions">
                    <a @click="close" href="#" class="text-white mr-2"><i class="fas fa-times"></i></a>
                </slot>
            </header>
            <section>
                <slot></slot>
            </section>
        </dialog>
    </teleport>
</template>

<script setup>
const emit = defineEmits(['close'])

const props = defineProps({
    show: Boolean,
    title: String,
})

const close = () => emit('close')
</script>

<style scoped>
.backdrop {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.75);
    z-index: 10;
}

dialog {
    position: fixed;
    top: 50%;
    left: 50%;
    right: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    z-index: 100;
    border-radius: 5px;
    border: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    padding: 0;
    margin: 0;
    overflow: auto;
    background-color: white;
}

dialog section {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}

header {
    background-color: #0D6EFD;
    color: white;
    width: 100%;
    padding: 0.5rem;
}

header p {
    margin: 0;
}

section {
    padding: 1rem;
}

menu {
    padding: 1rem;
    display: flex;
    justify-content: flex-end;
    margin: 0;
}

@media (min-width: 768px) {
    dialog {
        width: 60rem;
    }
}
</style>
