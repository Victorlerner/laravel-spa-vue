<template>
    <div>
        <div class="flex justify-between">
            <a href="#" class="text-blue-400" @click="$router.back()">
                < Back
            </a>
        </div>
        <form @submit.prevent="submitForm">

            <input-field name="name" label="Contact Name" :errors="errors"
                         placeholder="Contact Name" @update:field="form.name = $event" :data="form.name"
            />
            <input-field name="email" label="Contact Email" :errors="errors"
                         placeholder="Contact Email" @update:field="form.email = $event" :data="form.email"
            />
            <input-field name="company" label="Company" :errors="errors"
                         @update:field="form.company = $event" :data="form.company"
                         placeholder="Company"
            />
            <input-field name="birthday" label="Birthday" :errors="errors"
                         @update:field="form.birthday = $event"  :data="form.birthday"
                         placeholder="MM/DD/YYYY"
            />

            <div class="flex justify-end">
                <button class="py-2 px-4 rounded text-red-700 border mr-5
                 hover:border-red-700">Cancel
                </button>
                <button class="bg-blue-500 py-2 px-4 rounded text-white hover:bg-blue-400"
                >Save
                </button>
            </div>

        </form>

    </div>
</template>

<script>


  import InputField from '../components/InputField'

  export default {
      name: 'ContactsEdit',

      components: {
          InputField,
      },
      mounted() {
          axios.get('/api/contacts/' + this.$route.params.id).then(response => {
              this.form = response.data.data
              this.loading = false

          }).catch(error => {
              this.loading = false
              if(error.response.status === 404){
                  this.$router.push('/contacts')
              }
          })
      },
      data: function() {
          return {
              loading: true,
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
              axios.patch('/api/contacts/'+ this.$route.params.id, this.form).then(response => {
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
