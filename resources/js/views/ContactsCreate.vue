<template>
    <div>

        <form @submit.prevent="submitForm">

            <input-field name="name" label="Contact Name" :errors="errors"
                         placeholder="Contact Name" @update:field="form.name = $event"
            />
            <input-field name="email" label="Contact Email" :errors="errors"
                         placeholder="Contact Email" @update:field="form.email = $event"
            />
            <input-field name="company" label="Company" :errors="errors"
                         @update:field="form.company = $event"
                         placeholder="Company"
            />
            <input-field name="birthday" label="Birthday" :errors="errors"
                         @update:field="form.birthday = $event"
                         placeholder="MM/DD/YYYY"
            />

            <div class="flex justify-end">
                <button class="py-2 px-4 rounded text-red-700 border mr-5
                 hover:border-red-700">Cancel
                </button>
                <button class="bg-blue-500 py-2 px-4 rounded text-white hover:bg-blue-400"
                >Add New Contact
                </button>
            </div>

        </form>

    </div>
</template>

<script>
    import InputField from '../components/InputField'

    export default {
        name: 'ContactsCreate',
        components: {
            InputField,
        },
        data: function() {
            return {
                form: {
                    'name': '',
                    'email': '',
                    'company': '',
                    'birthday': '',
                },
                errors: null
            }
        },
        methods: {
            submitForm: function() {
                axios.post('/api/contacts', this.form).then(response => {
                    this.$router.push(response.data.links.self)

                }).catch(errors => {
                    this.errors = errors.response.data.errors
                })
            },
        },
    }
</script>

<style scoped>

</style>
