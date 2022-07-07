<template>
    <Head title="Complete Profile: Step 4" />
    <div class="w-full sm:w-3/5 md:w-3/4 mx-auto p-6">
        <div class="flex place-content-between">
            <div><strong>Complete Your Profile</strong></div>
            <div><strong class="text-[#EE0582]">Steps 4/4</strong></div>
        </div>

        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <div class="bg-gray-900 h-2.5 rounded-full" style="width: 100%"></div>
        </div>

        <jet-form-section @submitted="updateProfileInformation">
            <template #form>

                <div class="w-full mt-2">
                    <!-- Component Start -->
                    <p><strong>Add Public Photos</strong></p>
                    <small class="text-gray-400">Public photos can be seen by all members that visit your profile.</small>
                    <br>
                    <!-- Profile Photo -->
                    <div class="w-full flex mx-auto my-4 text-center">
                        <UpdateMedia
                            :error="error"
                            :server="server"
                            :media_server="media_server + form.uid"
                            :media_file_path="media_file_path"
                            
                            @saved-media="savedMedia"
                            @deleted-media='deletedMedia'
                            @added-media='AddedMedia'
                        />
                        <input type="hidden" v-model="form.type" />
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
    import { UploadMedia, UpdateMedia } from 'vue-media-upload'

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
            UploadMedia,
            UpdateMedia
        },

        props: ['user'],

        data() {
            return {
                error:'',
                server:'/api/upload', //the api that will temporary save the image.
                media_server:'/api/media/', //the api that will return the images names.
                media_file_path:'/storage/user_images', //the public file where the saved media are saved.
                saved_media: [], //saved media
                deleted_media:[], //deleted media
                added_media:[], //the added images

                form: this.$inertia.form({
                    _method: 'POST',
                    uid: this.user.id,
                    deleted_media:[], //deleted media
                    added_media:[], //the added images
                })
            }
        },

        methods: {
            updateProfileInformation() {
                this.form.post(route('profile.step4.store'), {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true
                });
            },
            savedMedia(value){
                this.saved_media=Object.values(value)
            },
            deletedMedia(value){
                this.deleted_media=value
                this.form.deleted_media=value
            },
            AddedMedia(value){
                this.added_media=value
                this.form.added_media=value
            },
        },
    })
</script>