<template>
        <div>
            <div class="p-2 text-2xl text-green-600 font-semibold w-full text-center"><p>WELCOME</p></div>
            <div class="p-8 w-full">
                <p>My GiHub: <a :href="links[0].github" target="_blank" rel="noopener noreferrer">zurii11</a></p>
                <p>My FB: <a :href="links[0].fb" target="_blank" rel="noopener noreferrer">Zuka</a></p>

                <h3 class="mt-6">What i know:</h3>
                <ul class="pl-6">
                    <li v-for="item in list"><svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5 text-green-500" 
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                                stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> {{ item.text }}</li>
                </ul>

                <h3 class="mt-6">Experience:</h3>
                <p>Not much, only real working expreience is that I just finished working on laravel site, fixed some things, just maintaining. Other than that just personal projects, some of which are on my github, but not many. Not much in terms of expreience, but I'm passionate, love coding and care about my code.</p>
            </div>
        </div>
</template>
<script>
export default {

    setup() {
        
    },

    data() {
        return {

            links: [
                { 
                    github: 'https://github.com/zurii11',
                    fb: 'https://facebook.com/zukaa'
                },
            ],

            list: [
                { text: 'HTML' },
                { text: 'CSS' },
                { text: 'JavaScript' },
                { text: 'Anuglar(a little bit)' },
                { text: 'ReactJS(a little bit)' },
                { text: 'p5js(very fun, you should try)' },
                { text: 'Python' },
                { text: 'PHP' },
                { text: 'Laravel' },
                { text: 'a little bit of C#' }
            ]
        }
    }
}
</script>