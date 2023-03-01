<template>
    <div class="form-group mb-2">
        <slot name="label">
            <label for="name">{{ label }}</label>
        </slot>
        <slot>
            <input :value="value"
                   v-bind="$attrs"
                   class="form-control"
                   :class="isInvalidClass"
                   @input="(e) => $emit('update:value', e.target.value)"
                   :disabled="disabled" />
        </slot>
        <slot name="validation">
            <span v-if="error" class="text-danger">{{ error }}</span>
        </slot>
    </div>
</template>

<script setup>
defineProps({
    disabled: Boolean,
    error: null,
    isInvalidClass: null,
    label: String,
    value: [String, Number]
})
</script>
