<template>
    <Head title="Complete Profile: Step 1" />
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
                    <strong>Date of birth</strong>
                    <jet-input id="dob" type="date" class="bg-gray-200 block w-full" v-model="form.dob" placeholder="DOB" />
                    <jet-input-error :message="form.errors.dob" class="mt-2" />
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>You are a:</strong>
                    <div class="grid grid-cols-2 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="sex_1" type="radio" v-model="form.sex" name="sex" :checked="form.sex == 'male'">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="sex_1">
                                <span class="text-center font-semibold">Male</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="sex_2" type="radio" v-model="form.sex" name="sex" :checked="form.sex == 'female'">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="sex_2">
                                <span class="text-center font-semibold">Female</span>
                            </label>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.sex" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>Interested In</strong>
                    <div class="grid grid-cols-2 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="matchSex_1" type="radio" v-model="form.matchSex" name="matchSex" :checked="form.matchSex == 'male'">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="matchSex_1">
                                <span class="text-center font-semibold">Looking for Men</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="matchSex_2" type="radio" v-model="form.matchSex" name="matchSex" :checked="form.matchSex == 'female'">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="matchSex_2">
                                <span class="text-center font-semibold">Looking for Woman</span>
                            </label>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.matchSex" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>Body Type</strong>
                    <div class="flex gap-2 w-full overflow-x-auto max-w-screen-sm no-scrollbar">
                        <label for="athletic" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="athletic" v-model="form.bodyType" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="athletic" />
                            <span class="ml-2 relative z-20">Athletic</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="average" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="average" v-model="form.bodyType" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="average" />
                            <span class="ml-2 relative z-20">Average</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="slim" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="slim" v-model="form.bodyType" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="slim" />
                            <span class="ml-2 relative z-20">Slim</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="curvy" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="curvy" v-model="form.bodyType" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="curvy" />
                            <span class="ml-2 relative z-20">Curvy</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="fat" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="fat" v-model="form.bodyType" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="fat" />
                            <span class="ml-2 relative z-20">Fat</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>
                    </div>
                    <jet-input-error :message="form.errors.bodyType" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>Height</strong>
                    <select-input v-model="form.height">
                        <option value="120" :selected="form.height == '120'">3 ′ 11 ″ – 120 cm</option>
                        <option value="122" :selected="form.height == '122'">4 ′ 0 ″ – 122 cm</option>
                        <option value="124" :selected="form.height == '124'">4 ′ 1 ″ – 124 cm</option>
                        <option value="126" :selected="form.height == '126'">4 ′ 2 ″ – 126 cm</option>
                        <option value="128" :selected="form.height == '128'">4 ′ 2 ″ – 128 cm</option>
                        <option value="130" :selected="form.height == '130'">4 ′ 3 ″ – 130 cm</option>
                        <option value="132" :selected="form.height == '132'">4 ′ 4 ″ – 132 cm</option>
                        <option value="134" :selected="form.height == '134'">4 ′ 5 ″ – 134 cm</option>
                        <option value="136" :selected="form.height == '136'">4 ′ 6 ″ – 136 cm</option>
                        <option value="138" :selected="form.height == '138'">4 ′ 6 ″ – 138 cm</option>
                        <option value="140" :selected="form.height == '140'">4 ′ 7 ″ – 140 cm</option>
                        <option value="142" :selected="form.height == '142'">4 ′ 8 ″ – 142 cm</option>
                        <option value="144" :selected="form.height == '144'">4 ′ 9 ″ – 144 cm</option>
                        <option value="146" :selected="form.height == '146'">4 ′ 9 ″ – 146 cm</option>
                        <option value="148" :selected="form.height == '148'">4 ′ 10 ″ – 148 cm</option>
                        <option value="150" :selected="form.height == '150'">4 ′ 11 ″ – 150 cm</option>
                        <option value="152" :selected="form.height == '152'">5 ′ 0 ″ – 152 cm</option>
                        <option value="154" :selected="form.height == '154'">5 ′ 1 ″ – 154 cm</option>
                        <option value="156" :selected="form.height == '156'">5 ′ 1 ″ – 156 cm</option>
                        <option value="158" :selected="form.height == '158'">5 ′ 2 ″ – 158 cm</option>
                        <option value="160" :selected="form.height == '160'">5 ′ 3 ″ – 160 cm</option>
                        <option value="162" :selected="form.height == '162'">5 ′ 4 ″ – 162 cm</option>
                        <option value="164" :selected="form.height == '164'">5 ′ 5 ″ – 164 cm</option>
                        <option value="166" :selected="form.height == '166'">5 ′ 5 ″ – 166 cm</option>
                        <option value="168" :selected="form.height == '120'">5 ′ 6 ″ – 168 cm</option>
                        <option value="170" :selected="form.height == '170'">5 ′ 7 ″ – 170 cm</option>
                        <option value="172" :selected="form.height == '172'">5 ′ 8 ″ – 172 cm</option>
                        <option value="174" :selected="form.height == '174'">5 ′ 9 ″ – 174 cm</option>
                        <option value="176" :selected="form.height == '176'">5 ′ 9 ″ – 176 cm</option>
                        <option value="178" :selected="form.height == '178'">5 ′ 10 ″ – 178 cm</option>
                        <option value="180" :selected="form.height == '180'">5 ′ 11 ″ – 180 cm</option>
                        <option value="182" :selected="form.height == '182'">6 ′ 0 ″ – 182 cm</option>
                        <option value="184" :selected="form.height == '184'">6 ′ 0 ″ – 184 cm</option>
                        <option value="186" :selected="form.height == '186'">6 ′ 1 ″ – 186 cm</option>
                        <option value="188" :selected="form.height == '188'">6 ′ 2 ″ – 188 cm</option>
                        <option value="190" :selected="form.height == '190'">6 ′ 3 ″ – 190 cm</option>
                        <option value="192" :selected="form.height == '120'">6 ′ 4 ″ – 192 cm</option>
                        <option value="194" :selected="form.height == '194'">6 ′ 4 ″ – 194 cm</option>
                        <option value="196" :selected="form.height == '198'">6 ′ 5 ″ – 196 cm</option>
                        <option value="198" :selected="form.height == '120'">6 ′ 6 ″ – 198 cm</option>
                        <option value="200" :selected="form.height == '200'">6 ′ 7 ″ – 200 cm</option>
                        <option value="202" :selected="form.height == '202'">6 ′ 8 ″ – 202 cm</option>
                        <option value="204" :selected="form.height == '204'">6 ′ 8 ″ – 204 cm</option>
                        <option value="206" :selected="form.height == '206'">6 ′ 9 ″ – 206 cm</option>
                        <option value="208" :selected="form.height == '208'">6 ′ 10 ″ – 208 cm</option>
                        <option value="210" :selected="form.height == '210'">6 ′ 11 ″ – 210 cm</option>
                        <option value="212" :selected="form.height == '212'">6 ′ 11 ″ – 212 cm</option>
                        <option value="214" :selected="form.height == '214'">7 ′ 0 ″ – 214 cm</option>
                        <option value="216" :selected="form.height == '216'">7 ′ 1 ″ – 216 cm</option>
                        <option value="218" :selected="form.height == '218'">7 ′ 2 ″ – 218 cm</option>
                        <option value="220" :selected="form.height == '220'">7 ′ 3 ″ – 220 cm</option>
                    </select-input>
                    <jet-input-error :message="form.errors.height" class="mt-2" />
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
        background-color: #FFF;
        border-color: #ee3397;
        color: #EE0582;
        /* box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); */
    }
    /* Hide scrollbar for Chrome, Safari and Opera */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
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
    import SelectInput from '@/Shared/SelectInput.vue'
    import moment from 'moment'

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
            SelectInput,
            moment
        },

        props: [
            'user',
            'userInfo'
        ],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'POST',
                    username: this.userInfo.username,
                    dob: this.userInfo.birthday ?? null,
                    sex: this.userInfo.sex ?? 'male',
                    matchSex: this.userInfo.matchSex ?? 'female',
                    photo: null,
                    bodyType: this.userInfo.bodyType.split(',') ?? [],
                    height: this.userInfo.height ?? '168',
                }),
                photoPreview: null,
            }
        },

        methods: {
            updateProfileInformation() {
                if (this.$refs.photo) {
                    this.form.photo = this.$refs.photo.files[0]
                }

                this.form.post(route('profile.step1.post'), {
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