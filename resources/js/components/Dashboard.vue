<template>
    <div class="w-full">
        <div class="w-full">
            <div class="p-2 text-2xl text-green-600 font-semibold w-full text-center"><p>Congrats {{ user.name }}, you're logged in!</p></div>
        </div>
        <div class="p-2 w-full text-center">
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" @click.prevent="logout">Log Out</button>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            user: null,
        }
    },

    mounted() {
        axios.get('/api/user').then((res) => {
            this.user = res.data
        })
    },

    methods: {
        logout() {
            axios.post('/api/logout').then(() => {
                this.$router.push({ path: '/'});
            })
        }
    },

    setup() {
        
    },
}
</script>