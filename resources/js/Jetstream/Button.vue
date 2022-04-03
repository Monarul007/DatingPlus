<template>
    <button :type="type" class="items-center px-4 py-2 bg-[#EE0582] border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#e7298e] active:bg-[#EE0582] focus:outline-none focus:border-[#EE0582] focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot></slot>
    </button>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    })
</script>
