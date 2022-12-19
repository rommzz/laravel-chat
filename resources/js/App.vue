<template>
    <div>
        <div>
            vue
        </div>
        <button @click="$router.push('/')">home</button>
        <button @click="$router.push('/about')">about</button>
        <router-view></router-view>
    </div>
</template>
<script>
export default {
    setup() {
        
    },
}
</script>