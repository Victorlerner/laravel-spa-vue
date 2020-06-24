<template>
    <div class="rounded-full text-white bg-blue-400 w-10 h-10 flex justify-center items-center border-green-400">
   {{userCircle}}
    </div>
</template>

<script>
    export default {
        name: 'UserCircle',
        props: [
            'name'
        ],
        computed: {
            userCircle: function() {

                if (this.name) {

                 return this.name.match(/[A-Z-А-Я]/g).slice(0, 2).join('')

                }
                return '-'
            },
        },
    }
</script>

<style scoped>

</style>
