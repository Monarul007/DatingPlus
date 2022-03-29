<template>
  <app-layout title="All Users">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Users
      </h2>
    </template>
    <div class="pt-6 pb-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg">
          <div class="flex items-center justify-between mb-6">
            <search-filter v-model="form.search" class="mr-4 w-full max-w-md" @reset="reset">
              <label class="block text-gray-700">Role:</label>
              <select v-model="form.role" class="form-select mt-1 w-full">
                <option :value="null" />
                <option value="user">User</option>
                <option value="owner">Owner</option>
              </select>
              <label class="block mt-4 text-gray-700">Trashed:</label>
              <select v-model="form.trashed" class="form-select mt-1 w-full">
                <option :value="null" />
                <option value="with">With Trashed</option>
                <option value="only">Only Trashed</option>
              </select>
            </search-filter>
            <Link class="btn-indigo" href="/users/create">
              <span>Create</span>
              <span class="hidden md:inline">&nbsp;User</span>
            </Link>
          </div>
          <div class="bg-white rounded-md shadow overflow-x-auto">
            <table class="w-full whitespace-nowrap">
              <tr class="text-left font-bold">
                <th class="pb-4 pt-6 px-6">Name</th>
                <th class="pb-4 pt-6 px-6">Email</th>
                <th class="pb-4 pt-6 px-6" colspan="2">Role</th>
              </tr>
              <tr v-for="userdfdf in users.data" :key="userdfdf.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                <td class="border-t">
                  <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/users/${userdfdf.id}/edit`">
                    <img v-if="userdfdf.photo" class="block -my-2 mr-2 w-5 h-5 rounded-full" :src="userdfdf.photo" />
                    {{ userdfdf.name }}
                    <icon v-if="userdfdf.deleted_at" name="trash" class="flex-shrink-0 ml-2 w-3 h-3 fill-gray-400" />
                  </Link>
                </td>
                <td class="border-t">
                  <Link class="flex items-center px-6 py-4" :href="`/users/${userdfdf.id}/edit`" tabindex="-1">
                    {{ userdfdf.email }}
                  </Link>
                </td>
                <td class="border-t">
                  <Link class="flex items-center px-6 py-4" :href="`/users/${userdfdf.id}/edit`" tabindex="-1">
                    {{ userdfdf.owner ? 'Owner' : 'User' }}
                  </Link>
                </td>
                <td class="w-px border-t">
                  <Link class="flex items-center px-4" :href="`/users/${userdfdf.id}/edit`" tabindex="-1">
                    <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
                  </Link>
                </td>
              </tr>
              <tr v-if="users.data.length === 0">
                <td class="px-6 py-4 border-t" colspan="4">No users found.</td>
              </tr>
            </table>
          </div>
          <pagination class="mt-6" :links="users.links" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import Icon from '@/Shared/Icon'
import pickBy from 'lodash/pickBy'
// import Layout from '@/Shared/Layout'
import Dropdown from '@/Shared/Dropdown'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import SearchFilter from '@/Shared/SearchFilter'
import AppLayout from '@/Layouts/AppLayout.vue'
import Pagination from '@/Shared/Pagination'

export default defineComponent({
  components: {
    Head,
    Icon,
    Link,
    Dropdown,
    SearchFilter,
    Pagination,
    AppLayout
  },
  // layout: AppLayout,
  props: {
    filters: Object,
    users: Object,
  },

  data() {
    return {
      form: {
        search: this.filters.search,
        role: this.filters.role,
        trashed: this.filters.trashed,
      },
    }
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/users', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
  },
})
</script>
