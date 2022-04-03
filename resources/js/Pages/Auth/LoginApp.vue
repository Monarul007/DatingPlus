<template>
    <img src="/images/logo-white.jpg" class="mb-8 mx-auto" alt="DatingPlus+ Logo"/>
    <div>
        <a href="#" class="flex items-center justify-center mt-4 text-white rounded-lg shadow bg-white hover:bg-gray-100">
            <div class="px-4 py-3">
                <svg class="h-6 w-6" viewBox="0 0 40 40">
                    <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#FFC107"/>
                    <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z" fill="#FF3D00"/>
                    <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z" fill="#4CAF50"/>
                    <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#1976D2"/>
                </svg>
            </div>
            <h1 class="px-4 py-3 w-5/6 text-gray-600">Continue with <strong>Google</strong></h1>
        </a>
        <a href="#" class="flex items-center justify-center mt-2 text-white rounded-lg shadow bg-blue-500 hover:bg-blue-400">
            <div class="px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </div>
            <h1 class="px-4 py-3 w-5/6 text-white-600">Continue with <strong>Facebook</strong></h1>
        </a>
        <div class="my-2 text-center">Or</div>
        <Link :href="route('register')" class="flex items-center justify-center text-white rounded-lg shadow bg-[#EE0582] hover:bg-[#ec4899]">
            <div class="px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h1 class="px-4 py-3 w-5/6 text-white-600">Continue with <strong>Email</strong></h1>
        </Link>
        <div class="text-center my-3">
            <small class="block text-gray-400 leading-snug">By signing up you are agreeing to our </small> <small class="block text-gray-400 leading-snug"> <Link class="text-gray-600" :href="route('terms.show')">Terms of Use</Link> and <Link class="text-gray-600" :href="route('policy.show')">Privacy Policy</Link></small>
        </div>
        <div class="mt-8">
            <p class="text-gray-600 text-center">Already have an account? <strong><Link class="text-gray-900" :href="route('login')">Login</Link></strong></p>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'
    // import Logo from '@/Shared/AnimatedLogo'

    export default defineComponent({
        components: {
            Link,
        }
    })
</script>
