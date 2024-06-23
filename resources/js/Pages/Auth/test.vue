<template>
    <div class="site-settings bg-white p-3">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-2 btns">
                <button class="d-block btn btn-secondary-outline w-100" @click="activeType = type.name" :class="{ 'active': type.name == activeType }"  v-for="type in types">
                    {{ capitalizeWord(type.name) }}
                </button>
            </div>
            <div class="col-sm-6 col-md-9 col-lg-10">
                <div v-if="activeType == 'environment'">
                    <EnvironmentData :permissions="permissions" :role="role"></EnvironmentData>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import EnvironmentData from './EnvironmentData.vue';

export default {
    name: "SiteSettings",
    props: {
        permissions: Array,
        role: String,
    },
    components: {
        EnvironmentData,
    },
    data() {
        return {
            activeType: 'environment',
            types: [
                {
                    'name': 'environment',
                },
                // {
                //     'name': 'unknown',
                // },
                
            ],
        };
    },
    methods: {
        capitalizeWord(word) {
            return word.charAt(0).toUpperCase() + word.slice(1);
        },
    },
};
</script>
<style scoped>
@media (max-width: 576px) {
    .site-settings .btns {
        position: sticky;
        top: 64px;
        background: #fff;
    }
}
</style>