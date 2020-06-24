<template>
    <div class="h-screen bg-white">
        <div class="flex">
            <div class="pl-6 bg-gray-200 w-48 h-screen border-gray-400">
                <nav class="pt-4">
                    <router-link to="/">
                        <svg class="fill-current text-blue-600 w-12   " width="50" height="52" viewBox="0 0 50 52"
                             xmlns="http://www.w3.org/2000/svg"><title>Logomark</title>
                            <path
                                d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                                fill="#FF2D20" fill-rule="evenodd"/>
                        </svg>
                    </router-link>
                    <p class="pt-12 text text-xs text-gray-500 uppercase font-bold ">Create</p>


                    <router-link class="flex items-center py-2 hover:bg-blue-600 text-sm" to="/contacts/create">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
                        </svg>
                        <div class="tracking-wide pl-3"> Add new</div>

                    </router-link>


                    <p class="pt-12 text-xs text-gray-500 uppercase font-bold  ">General</p>
                    <router-link class="flex items-center py-2 hover:bg-blue-600 text-sm" to="/contacts">


                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/>
                        </svg>
                        <div class="tracking-wide pl-3">Contacts</div>

                    </router-link>
                    <router-link class="flex items-center py-2 hover:bg-blue-600 text-sm" to="/birthdays">


                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </svg>
                        <div class="tracking-wide pl-3">Birthdays</div>

                    </router-link>

                    <p class="pt-12 text-xs text-gray-500 uppercase font-bold ">Settings</p>
                    <router-link  class="flex items-center py-2 hover:bg-blue-600 text-sm" to="/logout">


                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
                        </svg>
                        <div class="tracking-wide pl-3">Logout</div>

                    </router-link>

                </nav>

            </div>

            <div class="flex  flex-col flex-1 h-screen  overflow-y-hidden">
                <div class="h-16 px-6 border-b border-gray-400 flex items-center justify-between "  >
                    <div class="">
                         {{ title}}
                    </div>
                    <div class="flex items-center">
                        <search-bar />
                        <user-circle  :name="user.name" />
                    </div>


                </div>

                <div class="flex flex-col overflow-y-hidden flex-1">
                    <router-view  class="p-6 overflow-x-hidden" ></router-view>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    import UserCircle from './UserCircle'
    import SearchBar from './SearchBar'
    export default {
        name: 'App',
        props: [
            'user'
        ],
        components: {
          UserCircle, SearchBar
        },
        created() {
            this.title = this.$route.meta.title
            window.axios.interceptors.request.use (
                (config) => {
                    if(config.method === 'get'){
                        config.url = config.url + '?api_token=' + this.user.api_token
                    } else {
                        config.data = {
                            ...config.data,
                            api_token: this.user.api_token
                        }
                    }
                    return config
                }
            )
        },
        data: function() {
            return {
                title: ''
            }

        },
        watch: {
            $route(to, from){
                this.title = to.meta.title
            },
            title(){
                document.title = this.title + ' | Spa APP'
            }
        }
    }
</script>

<style scoped>

</style>
