<template>
    <Link :href="'/'">
        <img src="/images/logo-white.jpg" class="mt-8 mx-auto" width="250" alt="DatingPlus+ Logo"/>
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
