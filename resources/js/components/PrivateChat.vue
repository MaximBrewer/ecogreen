<template>
    <v-container class="grey lighten-5">
        <v-row  no-gutters >
            <v-col cols="3" >
                    <v-list three-line>
                        <template v-for="(item, index) in items">
                            <v-subheader
                                    v-if="item.header"
                                    :key="item.header"
                                    v-text="item.header"
                            ></v-subheader>

                            <v-divider
                                    v-else-if="item.divider"
                                    :key="index"
                                    :inset="item.inset"
                            ></v-divider>

                            <v-list-item
                                    v-else
                                    :key="item.title"
                                    @click=""
                            >
                                <v-list-item-avatar>
                                    <v-img :src="item.avatar"></v-img>
                                </v-list-item-avatar>

                                <v-list-item-content>
                                    <v-list-item-title v-html="item.title"></v-list-item-title>
                                    <v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                        </template>
                    </v-list>
            </v-col>
            <v-col cols="6" >
                <!--<v-textarea-->
                        <!--name="input-7-1"-->
                        <!--filled-->
                        <!--label="Label"-->
                        <!--auto-grow-->
                        <!--value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."-->
                <!--&gt;</v-textarea>-->
                <textarea class="form-control" name="" id="" rows="10" readonly>
                    {{messages.join('\n')}}
                </textarea>
                        <hr>
                <input type="text" class="form-control" v-model="textMessage" @keyup.enter="SendMessage">
            </v-col>
            <v-col cols="3" >
                 В чате сейчас
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
    export default {
        name: "Chat",
        data() {
            return {
                messages: [],
                textMessage: '',
                items: [
                    {header: 'Today'},
                    {
                        avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
                        title: 'Brunch this weekend?',
                        subtitle: "<span class='text--primary'>Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?",
                    },
                    {divider: true, inset: true},
                    {
                        avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
                        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
                        subtitle: "<span class='text--primary'>to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.",
                    },
                    {divider: true, inset: true},
                    {
                        avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
                        title: 'Oui oui',
                        subtitle: "<span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?",
                    },
                    {divider: true, inset: true},
                    {
                        avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
                        title: 'Birthday gift',
                        subtitle: "<span class='text--primary'>Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?",
                    },
                    {divider: true, inset: true},
                    {
                        avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
                        title: 'Recipe to try',
                        subtitle: "<span class='text--primary'>Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
                    },
                ],
            }
        },
        mounted() {
            window.Echo.private('room.2').listen('PrivateChat', ({data}) => {
                this.messages.push(data.body);
            });
        },
        methods: {
            SendMessage() {
                axios.post('/private_messages', {body: this.textMessage, room_id: 2});
                this.messages.push(this.textMessage);
                this.textMessage = "";
            },
        }
    }
</script>

<style scoped>

</style>