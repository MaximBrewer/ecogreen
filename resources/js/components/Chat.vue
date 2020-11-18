<template>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control" name="" id="" rows="10" readonly>
                    {{messages.join('\n')}}
                </textarea>
                <hr>
                <input type="text" class="form-control" v-model="textMessage" @keyup.enter="SendMessage">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Chat",
        data() {
            return {
                messages: [],
                textMessage: '',
            }
        },
        mounted() {
            window.Echo.channel('laravel_database_chat').listen('Message', ({message}) => {
                this.messages.push(message);
            });
        },
        methods: {
            SendMessage() {
                axios.post('/messages', {body: this.textMessage});
                    this.messages.push(this.textMessage);
                    this.textMessage = "";
            },
        }
    }
</script>

<style scoped>

</style>