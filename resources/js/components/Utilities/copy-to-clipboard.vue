<template>
    <div class="tooltip">
        <a class="text-teal-400 hover:underline" href="#" @click="copyText" @mouseout="afterCopy"><span
            class="tooltiptext" :id="`myTooltip${selector}`">Copy to clipboard</span>{{ text }}</a>
    </div>
</template>

<script>
    export default {
        props: ['text', 'selector'],
        methods: {
            copyText() {

                let element = document.getElementById(this.selector);
                document.execCommand("copy");

                let selection = window.getSelection();
                let range = document.createRange();
                range.selectNodeContents(element);
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand("Copy");
                selection.removeAllRanges();

                let tooltip = document.getElementById("myTooltip" + this.selector);
                tooltip.innerHTML = "Copied!";
            },
            afterCopy() {
                let tooltip = document.getElementById("myTooltip" + this.selector);
                tooltip.innerHTML = "Copy to clipboard";
            }
        }
    }
</script>

<style scoped>
    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>
