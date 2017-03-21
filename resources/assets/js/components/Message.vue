<template>
    <li class="dropdown">
        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope"></i> <span class="label label-warning">{{messages.length}}</span>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <div v-for="message in messages">
                <li>
                    <div class="dropdown-messages-box">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" :src="message.image">
                        </a>
                        <div class="media-body">
                            <small class="pull-right">{{message.corn}}</small>
                            <strong>{{message.time}}</strong>.
                            <br>
                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
            </div>
        </ul>
    </li>
</template>
<script>
    export default{
        data(){
            return {
                messages: [{
                    'image': 'img/a7.jpg',
                    'corn': '46h ago',
                    'message': 'started following',
                    'time': '3 days ago at 7:58 pm - 10.06.2014'
                }, {
                    'image': 'img/a8.jpg',
                    'corn': '48h ago',
                    'message': 'started following',
                    'time': '3 days ago at 7:58 pm - 10.06.2014'
                }]
            }
        }
    }
</script>