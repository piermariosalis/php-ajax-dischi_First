let app = new Vue({
    el: "#app",
    data: {
        datas: ''
    },
    mounted() {
        axios.get('./database_dischi.php')
            .then(response => {
                console.log(response);
                this.datas = response.data;
                //console.log(this.datas)
            })
    }
})