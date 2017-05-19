<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vue</title>
</head>
<body>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<div id="app">
    <table>
        <tr>
            <th>id</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>操作</th>
        </tr>
        <tr v-for="(user,index) in users">
            <td>@{{user.id}}</td>
            <td>@{{ user.name }}</td>
            <td>@{{ user.email }}</td>
            <td>
                <button>删除</button>
                <button>修改</button>
            </td>
        </tr>
    </table>
</div>
</body>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            users: ''
        },
        mounted: function () {
            axios.get('http://vue-laravel.dev/api/user')
                .then(function (response) {
                    this.users = response.data;
                }.bind(this))
                .catch(function (error) {
                    console.log(error);
                });
        }
    });
</script>
</html>