Vue.use(VueAgile)

app = new Vue({
	el: '#header',
    data: {
        topHeader: true,
        search: true
    },
	components: {
		agile: VueAgile,
	},
    methods: {
        opacityHeader(){
            var header = document.querySelector('#header');
            var t = window.scrollY;
            var r = parseFloat(window.getComputedStyle(header).getPropertyValue('padding-top').replace('px', ''));
            var e = 1 - t / r;
            var i = e < 0 ? 0 : .99 < e ? 1 : e;

            header.querySelector('.header_background').style.opacity = i;

            if(i <= 0){
                this.topHeader = false;
                document.getElementById('navbar_wrapper').classList.add('fixed');
            }else{
                this.topHeader = true;
                document.getElementById('navbar_wrapper').classList.remove('fixed');
            }

            this.search = (i > .50);
        }
    },
    mounted(){
        window.addEventListener('scroll', this.opacityHeader);
        this.opacityHeader();
    }
})

