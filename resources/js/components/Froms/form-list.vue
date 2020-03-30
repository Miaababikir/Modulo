<template>
    <div class="flex flex-1 relative">
        <div class="w-1/3 h-full pb-4 overflow-y-scroll absolute">
            <!--            <div class="cursor-pointer bg-gray-300">-->
            <!--                <div class="px-4 py-6">-->
            <!--                    <div class="flex justify-between items-center">-->
            <!--                        <span class="text-gray-700 text-lg font-bold">Jone Doe</span>-->
            <!--                        <span class="text-gray-700 text-sm">2020-03-28</span>-->
            <!--                    </div>-->
            <!--                    <p class="mt-6 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="bg-white hover:bg-gray-200 cursor-pointer" v-for="submission in submissions"
                 @click="setSelected(submission)" :class="isSelected(submission)? 'bg-gray-300' : ''">
                <div class="px-4 py-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 text-lg font-bold">{{ submission.data | toTitle}}</span>
                        <span class="text-gray-700 text-sm">{{ submission.created_at }}</span>
                    </div>
                    <p class="mt-6 text-sm text-gray-600">{{ submission.data.body | toBody}}</p>
                </div>
            </div>
        </div>
        <div class="w-2/3 px-8 py-10 ml-auto" style="min-height: 600px">
            <div v-if="selected !== null">
                <div class="py-4">
                    <div class="flex flex-col">
                        <h2 class="text-2xl text-teal-400">{{ selected.data | toTitle}}</h2>
                        <p class="mt-3 text-gray-700">{{ selected.created_at }}</p>
                    </div>
                </div>
                <hr class="my-4">
                <div class="py-4">
                    <div class="flex-col flex-col">
                        <div class="py-4" v-for="key in Object.keys(selected.data)">
                            <label class="text-gray-700 font-bold" >{{ key }}</label>
                            <p class="mt-2 text-sm text-gray-600">{{ selected.data[key] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        props: ['submissions'],
        data() {
            return {
                selected: null,
            }
        },
        filters: {
            toTitle(value) {
                if (value.title != null) return value.title;
                if (value.name != null) return value.name;
                return '(Untitled!)'
            },
            toBody(value) {
                if (value != null) return value;
                return 'This submission has no body'
            }
        },
        methods: {
            setSelected(submission) {
                this.selected = submission;
            },
            isSelected(submission) {
                if (this.selected == null) return false;
                return submission.id === this.selected.id;
            }
        }
    }
</script>
