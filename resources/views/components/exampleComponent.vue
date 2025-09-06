<template>
    <div class="example-component">
        <h1>{{ title }}</h1>
        <button @click="increment">Clicked {{ count }} times</button>
    </div>
</template>

<script>
export default {
    name: 'ExampleComponent',
    data() {
        return {
            title: 'Hello from ExampleComponent!',
            count: 0
        }
    },
    methods: {
        increment() {
            this.count++
        }
    }
}
</script>

<style scoped>
.example-component {
    padding: 16px;
    border: 1px solid #ccc;
    border-radius: 8px;
}
</style>