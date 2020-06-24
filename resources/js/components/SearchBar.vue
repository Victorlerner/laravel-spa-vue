<template>
    <div>
        <div v-if="focus" @click="focus=false" class="bg-black opacity-25 absolute  right-0 left-0
top-0 bottom-0 z-10"></div>
        <div class="relative z-10">
            <div class="absolute mt-1 ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path class="heroicon-ui"
                          d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                </svg>
            </div>
            <input class="w-64 mr-6 bg-gray-200 border border-gray-400  pl-8 pr-3 py-1 text-sm rounded-full
        focus:outline-none focus:border-blue-500    focus:shadow focus:bg-gray-100" type="text"
                   placeholder="Search..." id="searchTerm" v-model="searchTerm"
                   @input="search"
                   @focus="focus = true"
            >

            <div v-if="focus" class="absolute bg-blue-900 text-white rounded-lg p-4 w-96  right-0 mr-6 mt-2
shadow z-20
">
                <div v-if="results == 0">No results found for {{searchTerm}} </div>
                <div v-for="result in results" @click="focus = false">
                <router-link :to="result.links.self" class="block py-2">
                    <div class="flex items-center">
                        <user-circle :name="result.data.name" />
                        <div class="pl-3">
                            <p>{{result.data.name}}</p>
                            <p>{{result.data.company}}</p>
                        </div>
                    </div>
                </router-link>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    import _ from 'lodash'
    import UserCircle from './UserCircle'

    export default {
        name: 'SearchBar',
        components: {
          UserCircle
        },
        data: function() {
            return {
                searchTerm: '',
                focus: false,
                results: [],
            }

        },
        methods: {
            search: _.debounce(function(i) {
                if (this.searchTerm.length < 3) {
                    return
                }

                axios.post('/api/search', {searchTerm: this.searchTerm}).then(res => {
                    this.results = res.data.data
                }).catch(e => {
                    console.log(e.response)
                })

            }, 300),
        },
    }
</script>

<style scoped>

</style>
