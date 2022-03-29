<template>
    <app-layout title="Choose Your Plan">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Checkout
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="h-screen">
                    <div class="w-50 m-auto lg:mt-16 max-w-sm">
                        <img src="https://image.freepik.com/free-vector/app-development-illustration_52683-47931.jpg" alt="" class="rounded-t-2xl shadow-2xl lg:w-full 2xl:w-full 2xl:h-44 object-cover"/>
                        <div class="bg-white shadow-2xl rounded-b-3xl">
                        <h2 class="text-center text-gray-800 text-2xl font-bold pt-6">Order Summary</h2>
                        <div class="w-5/6 m-auto">
                            <ul class="relative py-3 space-y-3">
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-500"><svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>View All Profiles &amp; Photos</span></li>
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-500"><svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Chat With Any Member</span></li>
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792"><path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path></svg><span>Send Free Flirts</span></li>
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792"><path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path></svg><span>Access Private Content</span></li>
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792"><path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path></svg><span>See Who Viewed Your Profile</span></li>
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792"><path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path></svg><span>Video Chat with Any Member</span></li>
                                <li class="flex items-center space-x-2 text-sm font-medium text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792"><path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path></svg><span>Get special offers</span></li>
                            </ul>
                        </div>
                        <div class="grid grid-cols-4 w-72 lg:w-5/6 m-auto bg-indigo-50 mt-5 p-4 lg:p-4 rounded-2xl">
                            <div class="col-span-1">
                            <img class="w-15 lg:w-12" src="https://img.icons8.com/ultraviolet/40/000000/musical-notes.png" alt="music icon"/>
                            </div>
                            <div class="col-span-2 pt-1">
                            <p class="text-gray-800 font-bold lg:text-sm">Anual Plan</p>
                            <p class="text-gray-500 text-sm">$59.99/year</p>
                            </div>
                            <div class="pt-2">
                            <Link :href="route('pricing')" class="text-indigo-700 underline hover:no-underline  text-sm hover:text-indigo-500 font-bold">Change</Link>
                            </div>
                        </div>
                        <form @submit.prevent="processPayment">
                            <!-- price_1KZw5sK9i9htXsq9UH73erDs year
                            price_1KZw5XK9i9htXsq9VrvS0BgZ month
                            price_1KZw5GK9i9htXsq9cR5nA58s week
                            price_1KZw3uK9i9htXsq9zImVAeJe day -->
                            <input v-model="form.plan" :error="form.errors.plan" type="hidden">
                            <input v-model="form.paymentMethod" :error="form.errors.paymentMethod" type="hidden" id="payment_method">
                            <div class="w-5/6 m-auto flex flex-wrap mt-4">
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="card-element" class="leading-7 text-sm text-gray-600">Credit Card Info</label>
                                        <div id="card-element"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            <!-- <div class="bg-blue-700 w-72 lg:w-5/6 m-auto mt-6 p-2 hover:bg-indigo-500 rounded-2xl  text-white text-center shadow-xl shadow-bg-blue-700"
                            @click="processPayment"
                            >
                                <button classs="lg:text-sm text-lg font-bold"
                                :disabled="paymentProcessing"
                                v-text="paymentProcessing ? 'Processing' : 'Pay Now'"
                                ></button>
                            </div> -->
                            <div class="m-auto text-center">
                                <jet-button class="bg-blue-700 w-72 lg:w-5/6 m-auto mt-6 p-2 hover:bg-indigo-500 rounded-2xl text-white text-center shadow-xl shadow-bg-blue-700" v-text="paymentProcessing ? 'Processing' : 'Pay Now'" type="submit"></jet-button>
                            </div>
                        </form>
                        <div class="text-center m-auto mt-6 w-full h-16">
                            <button class="text-gray-500 font-bold lg:text-sm hover:text-gray-900">Cancel Payment</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { loadStripe } from '@stripe/stripe-js';

    export default defineComponent({
        
        components: {
            AppLayout,
            JetButton,
            JetInput,
            JetLabel,
            JetValidationErrors,
            Link,
        },
        props: {
            name: String,
            email: String,
            intent: Object
        },
        data() {
            return {
                form: this.$inertia.form({
                    plan: 'price_1KZw5GK9i9htXsq9cR5nA58s',
                    paymentMethod: ''
                }),
                clientSecret: this.intent.client_secret,
                stripe: {},
                cardElement: {},
                customer: {
                    name: 'Monarul Islam',
                    email: 'monarul007@gmail.com'
                },
                paymentProcessing: false
            }
        },
        async mounted() {
            this.stripe = await loadStripe(process.env.MIX_STRIPE_KEY);
            const elements = this.stripe.elements();
            this.cardElement = elements.create('card', {
                classes: {
                    base: 'bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 p-3 leading-8 transition-colors duration-200 ease-in-out'
                }
            });
            this.cardElement.mount('#card-element');
        },
        methods: {
            async processPayment() {
                this.paymentProcessing = true;
                // const {paymentMethod, error} = await this.stripe.createPaymentMethod(
                //     'card', this.cardElement, {
                //         billing_details: {
                //             name: this.customer.name + ' ' + this.customer.email
                //         }
                //     }
                // );
                // if (error) {
                //     this.paymentProcessing = false;
                //     console.error(error);
                // } else {
                //     console.log(paymentMethod);
                //     this.customer.payment_method_id = paymentMethod.id;
                //     let el = document.getElementById("payment_method");
                //     el.value = paymentMethod.id;
                //     el.dispatchEvent(new Event('input'));
                //     this.form.post(this.route('subscribe.post'));
                // }

                const { setupIntent, error } = await this.stripe.confirmCardSetup(
                    this.clientSecret, {
                        payment_method: {
                            card: this.cardElement,
                            billing_details: { name: this.customer.name }
                        }
                    }
                );
            
                if (error) {
                    // Display "error.message" to the user...
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // The card has been verified successfully...
                    // this.customer.payment_method_id = paymentMethod.id;
                    let el = document.getElementById("payment_method");
                    el.value = setupIntent.payment_method;
                    el.dispatchEvent(new Event('input'));
                    this.form.post(this.route('subscribe.post'));
                }
            },
        }
    })
</script>
