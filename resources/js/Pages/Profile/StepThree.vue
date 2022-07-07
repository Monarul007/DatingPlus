<template>
    <Head title="Complete Profile: Step 3" />
    <div class="w-full sm:w-3/5 md:w-3/4 mx-auto p-6">
        <div class="flex place-content-between">
            <div><strong>Complete Your Profile</strong></div>
            <div><strong class="text-[#EE0582]">Steps 3/4</strong></div>
        </div>

        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <div class="bg-gray-900 h-2.5 rounded-full" style="width: 75%"></div>
        </div>

        <jet-form-section @submitted="updateProfileInformation">
            <template #form>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <p><strong>Select Your Interest</strong></p>
                    <span>Require to select minimum three</span>
                    <br>
                    <div class="grid grid-cols-3 gap-2 w-full max-w-screen-sm my-6 mx-auto">
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="music" v-model="form.interests" value="music" style="background-image: url(https://media.istockphoto.com/photos/happy-millennial-african-businessman-wear-headphones-listening-music-picture-id1203044169?k=20&m=1203044169&s=612x612&w=0&h=Vssm_Ib1hxe36teP5auJsg3FJvtu5Tp9N82uFPLiegY=) " checked/>
                            <p class="text-center">Music</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="cooking" v-model="form.interests" value="cooking" style="background-image: url(https://media.gettyimages.com/photos/romance-and-cooking-picture-id639568972?s=612x612) " />
                            <p class="text-center">Cooking</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="shopping" v-model="form.interests" value="shopping" style="background-image: url(https://media.istockphoto.com/photos/pretty-young-woman-stylishly-dressed-in-a-straw-hat-with-color-bags-picture-id1033729610?k=20&m=1033729610&s=612x612&w=0&h=56u-S8LPU2gL5CO3kSF9wq_PV4kSY5oVl7Hhm-0fshg=) " />
                            <p class="text-center">Shopping</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="gym-fitness" v-model="form.interests" value="gym-fitness" style="background-image: url(https://thumbs.dreamstime.com/b/sporty-sexy-couple-showing-muscle-workout-gym-muscular-man-wowan-men-112412386.jpg) " />
                            <p class="text-center">Gym & Fitness</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="travelling" v-model="form.interests" value="travelling" style="background-image: url(https://www.theblondeabroad.com/wp-content/uploads/2020/09/thumb-G0041679.jpg)" checked/>
                            <p class="text-center">Travelling</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="swimming" v-model="form.interests" value="swimming" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9yX0-7JVXGiIXJiA0vX5LYeZV0w1hDJBeoBAsvuFC-f1l0IxdkRG4NESIYTow011sfrI&usqp=CAU) " />
                            <p class="text-center">Swimming</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="party" v-model="form.interests" value="party" style="background-image: url(https://media.istockphoto.com/photos/nicelooking-attractive-gorgeous-glamorous-elegant-stylish-cheerful-picture-id1165055006?k=20&m=1165055006&s=612x612&w=0&h=OD4-_BceL_R2eaaBzDQrXNIyydwYXOJX-m-0z12z17s=)" checked/>
                            <p class="text-center">Party</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="singing" v-model="form.interests" value="singing" style="background-image: url(https://images.unsplash.com/photo-1623517272043-cae1572afc96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c2luZ2luZ3xlbnwwfHwwfHw%3D&w=1000&q=80=)" />
                            <p class="text-center">Singing</p>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" class="bg-cover" id="dance" v-model="form.interests" value="dance" style="background-image: url(https://cdn.britannica.com/85/177485-131-13EF3685/dancer.jpg)" />
                            <p class="text-center">Dance</p>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.interests" class="mt-2" />
                    <!-- Component End  -->
                </div>
            </template>
            
            <template #actions>
                <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                    Saved.
                </jet-action-message>

                <jet-button class="w-full block capitalize" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Save & Continue
                </jet-button>
            </template>
        </jet-form-section>
    </div>
</template>

<style>
    /* Basic styling */
    [type=checkbox] {
        width: 100px;
        height: 100px;
        color: dodgerblue;
        vertical-align: middle;
        -webkit-appearance: none;
        border: 0;
        outline: 0;
        flex-grow: 0;
        border-radius: 50%;
        transition: background 300ms;
        cursor: pointer;
    }


    /* Pseudo element for check styling */
    [type=checkbox]::before {
        content: "";
        color: transparent;
        display: block;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        border: 0;
        background-color: transparent;
        background-size: contain;
        box-shadow: inset 0 0 0 1px #CCD3D8;
    }

    /* Checked */
    [type=checkbox]:checked {
        background-color: currentcolor;
    }

    [type=checkbox]:checked::before {
        box-shadow: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
        background-color: rgb(173 4 95 / 90%);
    }


    /* Disabled */
    [type=checkbox]:disabled {
        background-color: #CCD3D8;
        opacity: 0.84;
        cursor: not-allowed;
    }


    /* IE */

    [type=checkbox]::-ms-check {
        content: "";
        color: transparent;
        display: block;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        border: 0;
        background-color: transparent;
        background-size: contain;
        box-shadow: inset 0 0 0 1px #CCD3D8;
    }

    [type=checkbox]:checked::-ms-check {
        box-shadow: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
    }
</style>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default defineComponent({
        components: {
            Head,
            Link,
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: ['user', 'userInfo'],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'POST',
                    interests: this.userInfo.interests.split(',') ?? []
                })
            }
        },

        methods: {
            updateProfileInformation() {
                this.form.post(route('profile.step3.post'), {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true
                });
            }
        },
    })
</script>