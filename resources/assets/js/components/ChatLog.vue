<template lang="html">
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
        <div class="empty" v-show="messages.length === 0">
            Nothing here yet!
        </div>
    </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
    .chat-log .chat-message {
        padding: 10px 5px;
    }

    .chat-log .chat-message:not(:first-child) {
        border-top: solid 1px #ccc;
    }

    .empty {
        padding: 1rem;
        text-align: center;
    }
</style>
