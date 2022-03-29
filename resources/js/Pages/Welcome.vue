<template>
  <Head title="Welcome" />

  <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0 bg-no-repeat bg-top bg-cover" :class="[elementVisible ? errorClass : '']" :style="[isMobile ? {'background-image': 'url(/images/pexels-asad-photo-maldives-2549071.jpg)'} : {'background-color': 'rgb(226 232 240)'}]">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <div v-show="elementInisible">
          <Logo />
        </div>
      </div>
    </div>
    <div v-show="elementVisible" class="fixed inset-x-0 bottom-0 animate-fade-in-up w-full sm:w-3/5 md:w-2/4 lg:w-1/3 p-10 pb-5 bg-slate-50 shadow-lg rounded-t-[20px]" :class="[isDesktop ? 'mx-auto md:bottom-[17%] rounded-[20px]' : '']">
      <Login />
    </div>
  </div>
</template>

<script>
  import { defineComponent } from 'vue'
  import Login from '@/Pages/Auth/LoginApp'
  import Logo from '@/Shared/AnimatedLogo'
  import { Head, Link } from '@inertiajs/inertia-vue3';

  export default defineComponent({
    components: {
      Head,
      Link,
      Login,
      Logo,
    },

    props: {
      canLogin: Boolean,
      canRegister: Boolean,
      isDesktop: Boolean,
      isMobile: Boolean,
      laravelVersion: String,
      phpVersion: String,
    },

    data() {
      return {
        elementVisible: false,
        elementInisible: true,
        errorClass: 'animate-zoomIn bg-bottom bg-[length:220%] transition duration-300 ease-in'
      }
    },

    created() {
      setTimeout(() => this.elementVisible = true, 5000);
      setTimeout(() => this.elementInisible = false, 5000);
    }
  })
</script>
