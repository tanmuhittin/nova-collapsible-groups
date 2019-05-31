<template>
    <div>
        <h4 class="ml-2 mb-4 text-sm text-white-50% uppercase tracking-wide hover:text-white" @click.prevent="toggle">
            <span v-if="is_expanded">-</span>
            <span v-else>+</span>
            {{ header }}
        </h4>

        <transition-group tag="ul" class="list-reset" :class="{'mb-6': last }" v-show="is_expanded">
            <slot></slot>
        </transition-group>
    </div>
</template>

<script>
    export default {
        props: {
            header: String,
            last: Boolean,
			expanded: Boolean
        },
        data(){
            return {
                is_expanded : false,
            }
        },
        created(){
            this.is_expanded = this.expanded;
        },
        methods: {
            toggle() {
                this.is_expanded = !this.is_expanded
            }
        }
    }
</script>

<style scoped>
    h4{
        cursor:pointer;
    }
</style>
