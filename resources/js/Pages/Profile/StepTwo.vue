<template>
    <Head title="Complete Profile: Step 2" />
    <div class="w-full sm:w-3/5 md:w-2/4 mx-auto p-6">
        <div class="flex place-content-between">
            <div><strong>Complete Your Profile</strong></div>
            <div><strong class="text-[#EE0582]">Steps 2/4</strong></div>
        </div>

        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <div class="bg-gray-900 h-2.5 rounded-full" style="width: 50%"></div>
        </div>

        <jet-form-section @submitted="updateProfileInformation">
            <template #form>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>Religion</strong>
                    <div class="grid grid-cols-3 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="religion_1" type="radio" v-model="form.religion" value="christian">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="religion_1">
                                <span class="text-center font-semibold">Christian</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="religion_2" type="radio" v-model="form.religion" value="muslim">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="religion_2">
                                <span class="text-center font-semibold">Muslim</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="religion_3" type="radio" v-model="form.religion" value="others">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="religion_3">
                                <span class="text-center font-semibold">Others</span>
                            </label>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.sex" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>What are you looking for</strong>
                    <div class="flex gap-2 w-full overflow-x-auto max-w-screen-sm no-scrollbar">
                        <label for="dating" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="dating" v-model="form.lookingFor" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="dating" />
                            <span class="ml-2 relative z-20">Dating</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="relationship" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="relationship" v-model="form.lookingFor" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="relationship" />
                            <span class="ml-2 relative z-20">Relationship</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="casual" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="casual" v-model="form.lookingFor" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="casual" />
                            <span class="ml-2 relative z-20">Casual</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="flirt" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="flirt" v-model="form.lookingFor" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="flirt" />
                            <span class="ml-2 relative z-20">Flirt</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="chat" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="chat" v-model="form.lookingFor" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="chat" />
                            <span class="ml-2 relative z-20">Chat</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>

                        <label for="friendship" class="relative flex text-center items-center isolate bg-gray-200 px-4 py-1 rounded-lg">
                            <input id="friendship" v-model="form.lookingFor" type="checkbox" class="relative peer z-20 text-purple-600 rounded-lg focus:ring-0" value="friendship" />
                            <span class="ml-2 relative z-20">Friendship</span>
                            <div class="absolute inset-0 peer-checked:bg-white peer-checked:border-[#EE0582] z-10 border rounded-lg"></div>
                        </label>
                    </div>
                    <jet-input-error :message="form.errors.lookingFor" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>LifeStyle Choices</strong>
                    <div class="grid grid-cols-4 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="lifeStyles_1" type="radio" v-model="form.lifeStyles" value="smoker">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="lifeStyles_1">
                                <span class="text-center font-semibold">Smoker</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="lifeStyles_2" type="radio" v-model="form.lifeStyles" value="non-smoker">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="lifeStyles_2">
                                <span class="text-center font-semibold">Non Smoker</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="lifeStyles_3" type="radio" v-model="form.lifeStyles" value="trying-to-quit">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="lifeStyles_3">
                                <span class="text-center font-semibold">Trying to quit</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="lifeStyles_4" type="radio" v-model="form.lifeStyles" value="social-smoker">
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="lifeStyles_4">
                                <span class="text-center font-semibold">Social Smoker</span>
                            </label>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.lifeStyles" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>Drinking</strong>
                    <div class="grid grid-cols-4 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="drinking_1" type="radio" v-model="form.drinking" value='drinks-frequently'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="drinking_1">
                                <span class="text-center font-semibold">Drinks Frequently</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="drinking_2" type="radio" v-model="form.drinking" value='non-drinker'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="drinking_2">
                                <span class="text-center font-semibold">Non Drinker</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="drinking_3" type="radio" v-model="form.drinking" value='trying-to-quit'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="drinking_3">
                                <span class="text-center font-semibold">Trying to quit</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="drinking_4" type="radio" v-model="form.drinking" value='social-drinker'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="drinking_4">
                                <span class="text-center font-semibold">Social Drinker</span>
                            </label>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.drinking" class="mt-2" />
                    <!-- Component End  -->
                </div>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <strong>Workout</strong>
                    <div class="grid grid-cols-3 gap-2 w-full max-w-screen-sm">
                        <div>
                            <input class="hidden" id="workout_1" type="radio" v-model="form.workout" value='gym-rat'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="workout_1">
                                <span class="text-center font-semibold">Gym Rat</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="workout_2" type="radio" v-model="form.workout" value='active'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="workout_2">
                                <span class="text-center font-semibold">Active</span>
                            </label>
                        </div>
                        <div>
                            <input class="hidden" id="workout_3" type="radio" v-model="form.workout" value='moderately-active'>
                            <label class="flex flex-col p-1 border rounded-lg border-gray-200 bg-gray-200 cursor-pointer" for="workout_3">
                                <span class="text-center font-semibold">Moderately Active</span>
                            </label>
                        </div>
                    </div>
                    <jet-input-error :message="form.errors.workout" class="mt-2" />
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
                    religion: this.userInfo.religion ?? 'christian',
                    lookingFor: this.userInfo.lookingFor.split(',') ?? [],
                    lifeStyles: this.userInfo.lifeStyles ?? 'non-smoker',
                    drinking: this.userInfo.drinking ?? 'non-drinker',
                    workout: this.userInfo.workout ?? 'active'
                })
            }
        },

        methods: {
            updateProfileInformation() {
                this.form.post(route('profile.step2.post'), {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true
                });
            }
        },
    })
</script>