<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-[#F8F8F8]">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
