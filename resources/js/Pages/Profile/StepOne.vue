<template>
    <Head title="Complete Profile - Step 1" />
    <div class="w-full sm:w-3/5 md:w-2/4 mx-auto p-6">
        <div class="flex place-content-between">
            <div><strong>Complete Your Profile</strong></div>
            <div><strong class="text-[#EE0582]">Steps 1/4</strong></div>
        </div>

        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <div class="bg-gray-900 h-2.5 rounded-full" style="width: 25%"></div>
        </div>

        <jet-form-section @submitted="updateProfileInformation">
            <template #form>
                <!-- Profile Photo -->
                <div class="w-full mx-auto my-4 text-center" v-if="$page.props.jetstream.managesProfilePhotos">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden" ref="photo" @change="updatePhotoPreview">

                    <!-- Current Profile Photo -->
                    <div class="cursor-pointer mx-auto relative inline-block" v-show="! photoPreview" @click.prevent="selectNewPhoto">
                        <img :src="'/storage/'+user.profile_photo_path" :alt="user.name" class="rounded-full h-20 w-20 object-cover">
                        <span class="absolute bottom-0 right-[5px] inline-flex items-center justify-center px-1 text-xs font-bold border-2 border-slate-100 text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-[#EE0582] rounded-full">+</span>
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="cursor-pointer mx-auto relative inline-block" v-show="photoPreview" @click.prevent="selectNewPhoto">
                        <span class="text-center block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                            :style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                        <span class="absolute bottom-0 right-[5px] inline-flex items-center justify-center px-1 text-xs font-bold border-2 border-slate-100 text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-[#EE0582] rounded-full">+</span>
                    </div>

                    <jet-label for="photo" value="Profile Picture" />

                    <jet-secondary-button type="button" class="mt-2" @click.prevent="deletePhoto" v-if="user.profile_photo_path">
                        Remove Photo
                    </jet-secondary-button>

                    <jet-input-error :message="form.errors.photo" class="mt-2" />
                </div>

                <!-- Username -->
                <div class="w-full">
                    <jet-input id="username" type="text" class="bg-gray-200 block w-full" v-model="form.username" autocomplete="username" placeholder="Username" />
                    <jet-input-error :message="form.errors.username" class="mt-2" />
                </div>

                <!-- Date of birth -->
                <div class="w-full mt-2">
                    <jet-input id="dob" type="date" class="bg-gray-200 block w-full" v-model="form.dob" placeholder="DOB" />
                    <jet-input-error :message="form.errors.dob" class="mt-2" />
                </div>

                <div class="w-full my-4">
                    <!-- Component Start -->
                    <strong>You are a:</strong>
                    <div class="grid grid-cols-2 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="sex_1" type="radio" name="sex" checked>
                            <label class="flex flex-col p-1 border-2 rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="sex_1">
                                <span class="text-center font-semibold">Male</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="sex_2" type="radio" name="sex">
                            <label class="flex flex-col p-1 border-2 rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="sex_2">
                                <span class="text-center font-semibold">Female</span>
                            </label>
                        </div>
                    </div>
                    <!-- Component End  -->
                </div>

                <div class="w-full my-4">
                    <!-- Component Start -->
                    <strong>Interested In</strong>
                    <div class="grid grid-cols-2 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="matchSex_1" type="radio" name="matchSex">
                            <label class="flex flex-col p-1 border-2 rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="matchSex_1">
                                <span class="text-center font-semibold">Lokking for Men</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="matchSex_2" type="radio" name="matchSex" checked>
                            <label class="flex flex-col p-1 border-2 rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="matchSex_2">
                                <span class="text-center font-semibold">Loking for Woman</span>
                            </label>
                        </div>
                    </div>
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

<style scoped>
    input:checked + label {
        border-color: #ee3397;
        color: #EE0582;
        /* box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); */
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

        props: ['user'],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'PUT',
                    username: '',
                    dob: '',
                    photo: null,
                }),
                photoPreview: null,
            }
        },

        methods: {
            updateProfileInformation() {
                if (this.$refs.photo) {
                    this.form.photo = this.$refs.photo.files[0]
                }

                this.form.post(route('user-profile-information.update'), {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true,
                    onSuccess: () => (this.clearPhotoFileInput()),
                });
            },

            selectNewPhoto() {
                this.$refs.photo.click();
            },

            updatePhotoPreview() {
                const photo = this.$refs.photo.files[0];

                if (! photo) return;

                const reader = new FileReader();

                reader.onload = (e) => {
                    this.photoPreview = e.target.result;
                };

                reader.readAsDataURL(photo);
            },

            deletePhoto() {
                this.$inertia.delete(route('current-user-photo.destroy'), {
                    preserveScroll: true,
                    onSuccess: () => {
                        this.photoPreview = null;
                        this.clearPhotoFileInput();
                    },
                });
            },

            clearPhotoFileInput() {
                if (this.$refs.photo?.value) {
                    this.$refs.photo.value = null;
                }
            },
        },
    })
</script>